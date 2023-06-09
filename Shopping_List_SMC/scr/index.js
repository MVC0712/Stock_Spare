var ajaxReturnData, fileName, sendData, inputData;
let active = sessionStorage.getItem("active_staff");
const myAjax = {
    myAjax: function (fileName, sendData) {
      $.ajax({
        type: "POST",
        url: "./php/"+fileName,
        dataType: "json",
        data: sendData,
        async: false,
      })
        .done(function (data) {
          ajaxReturnData = data;
        })
        .fail(function () {
          alert("DB connect error");
        });
    },
};

var formatDateComponent = function(dateComponent) {
    return (dateComponent < 10 ? '0' : '') + dateComponent;
};
var formatDate = function(date) {
    return date.getFullYear()  + '-' + formatDateComponent(date.getMonth() + 1) + '-' + formatDateComponent(date.getDate()) ;
};

$(function() {
    // inputSession();
    makeLine();
    makeTranBy();
    makeReq();
    makeSummaryTable();
    $("#save").attr("disabled", true);
    $("#update").attr("disabled", true);
    // $("#add_same").attr("disabled", true);
});
$(document).on("click", "#log_out", function() {
    $('#active_staff').html('');
    clearSession();
});
function clearSession() {
    sessionStorage.clear();
    inputSession();
    makeSummaryTable();
};
function inputSession() {
    if (sessionStorage.active_staff ==null) {
        let staff_code = prompt("Please enter your Emp No:", "");
        if (staff_code === null) {

        }
        var fileName = "SearchStaff.php";
        var sendData = {
            staff_code: staff_code,
        };
        myAjax.myAjax(fileName, sendData);
        if (ajaxReturnData.length !=0){
            sessionStorage.setItem("active_staff", JSON.stringify(ajaxReturnData));
            active = sessionStorage.getItem("active_staff");
            alert(JSON.parse(active)[0].staff_name + " is activating!");
        } else {
            alert("Your Emp No dose not exist!");
            inputSession();
        }
    }
};
function makeSummaryTable() {
    var fileName = "SelSummary.php";
    var sendData = {
        line_id : $("#line_id").val(),
    };
    myAjax.myAjax(fileName, sendData);
    fillTableBody(ajaxReturnData, $("#summary__table tbody"));
};
$(document).on("click", "#summary__table tbody tr", function (e) {
    let fileName = "SelUpdate.php";
    let sendData;
    if (!$(this).hasClass("selected-record")) {
      $(this).parent().find("tr").removeClass("selected-record");
      $(this).addClass("selected-record");
      $("#selected__tr").removeAttr("id");
      $(this).attr("id", "selected__tr");
      sendData = {
        targetId: $("#selected__tr").find("td").eq(0).html(),
      };
      myAjax.myAjax(fileName, sendData);
      putDataToInput(ajaxReturnData);
    } else {
    }
    $("#save").attr("disabled", false);
    $("#update").attr("disabled", false);
    $(".save-data").each(function (index, element) {
      $(this).removeClass("no-input").addClass("complete-input");
    });
});
function putDataToInput(data) {
    data.forEach(function (trVal) {
      Object.keys(trVal).forEach(function (tdVal) {
        $("#" + tdVal).val(trVal[tdVal]); 
      });
  });
};
function makeLine() {
    var fileName = "SelLine.php";
    var sendData = {
    };
    myAjax.myAjax(fileName, sendData);
    $("#line_id option").remove();
    $("#line_id").append($("<option>").val(0).html("NO"));
    ajaxReturnData.forEach(function(value) {
        $("#line_id").append(
            $("<option>").val(value["id"]).html(value["line"])
        );
    });
};
function makeTranBy() {
    var fileName = "SelTrans.php";
    var sendData = {
    };
    myAjax.myAjax(fileName, sendData);
    $("#delivery_by_id option").remove();
    $("#delivery_by_id").append($("<option>").val(0).html("NO"));
    ajaxReturnData.forEach(function(value) {
        $("#delivery_by_id").append(
            $("<option>").val(value["id"]).html(value["delivery_by"])
        );
    });
};
function makeReq() {
    var fileName = "SelReq.php";
    var sendData = {
    };
    myAjax.myAjax(fileName, sendData);
    $("#requester_id option").remove();
    $("#requester_id").append($("<option>").val(0).html("NO"));
    ajaxReturnData.forEach(function(value) {
        $("#requester_id").append(
            $("<option>").val(value["id"]).html(value["requester"])
        );
    });
};
function getData(fileName, sendData = {}) {
    myAjax.myAjax(fileName, sendData);
};
function makeSelect(id, data, display) {
    $("#"+ id + " option").remove();
    $("#"+id).append($("<option>").val(0).html("NO select"));
    data.forEach(function(value) {
        $("#"+id).append(
            $("<option>").val(value["id"]).html(value[display])
        );
    });
};
function fillTableBody(data, tbodyDom) {
    $(tbodyDom).empty();
    data.forEach(function(trVal) {
        let newTr = $("<tr>");
        Object.keys(trVal).forEach(function(tdVal, index) {
            if ((index <= 8)&&(index > 0)){
                $("<td>").html(trVal[tdVal]).appendTo(newTr).addClass("sticky-col cc"+index);
            } else {
                $("<td>").html(trVal[tdVal]).appendTo(newTr);
            }
        });
        $(newTr).appendTo(tbodyDom);
    });
};
function makeSelect(seletedId, fileName, sendData, display) {
    let targetDom = $("<select>");
    myAjax.myAjax(fileName, sendData);
    ajaxReturnData.forEach(function(element) {
        if (element["id"] == seletedId) {
            $("<option>")
                .html(element[display])
                .val(element["id"])
                .prop("selected", true)
                .appendTo(targetDom);
        } else {
            $("<option>")
                .html(element[display])
                .val(element["id"])
                .appendTo(targetDom);
        }
    });
    return targetDom;
};
function makeDate(datePlan) {
    let targetDom = $("<input>");
    targetDom.attr("type", "date");
    targetDom.val(datePlan);
    return targetDom;
};
$(document).on("change", ".select-input", function() {
    if ($(this).val() != 0) {
        $(this).removeClass("no-input").addClass("complete-input");
    } else {
        $(this).removeClass("complete-input").addClass("no-input");
    }
    checkInput();
});
$(document).on("change", ".date-input", function() {
    if ($(this).val() != "") {
        $(this).removeClass("no-input").addClass("complete-input");
    } else {
        $(this).removeClass("complete-input").addClass("no-input");
    }
    checkInput();
});
$(document).on("keyup", ".text-input", function() {
    if ($(this).val() != "") {
        $(this).removeClass("no-input").addClass("complete-input");
    } else {
        $(this).removeClass("complete-input").addClass("no-input");
    }
    checkInput();
});
$(document).on("keyup", ".number-input", function() {
    if($.isNumeric($(this).val())){
        $(this).removeClass("no-input").addClass("complete-input");
    } else {
        $(this).removeClass("complete-input").addClass("no-input");
    }
    checkInput();
});
$(document).on("change", "#line_id", function() {
    makeSummaryTable();
});
$(document).on("click", "#save", function () {
    fileName = "InsData.php";
    inputData = getInputData();
    sendData = inputData;
    myAjax.myAjax(fileName, sendData);
    makeSummaryTable()
});
$(document).on("click", "#update", function () {
    fileName = "UpdateData.php";
    inputData = getInputData();
    inputData["targetId"] = $("#selected__tr").find("td").eq(0).html();
    sendData = inputData;
    myAjax.myAjax(fileName, sendData);
    makeSummaryTable()
});
function getInputData() {
    let inputData = new Object();
      $("input.save-data").each(function (index, element) {
        inputData[$(this).attr("id")] = $(this).val();
      });
      $("select.save-data").each(function (index, element) {
        inputData[$(this).attr("id")] = $(this).val();
      });
      inputData["targetId"] = $("#selected__tr").find("td").eq(0).html();
    return inputData;
};
function getTableData(tableTrObj) {
    var tableData = [];
    tableTrObj.each(function (index, element) {
      var tr = [];
      $(this)
        .find("td")
        .each(function (index, element) {
          if ($(this).find("input").length) {
            tr.push($(this).find("input").val());
          } else if ($(this).find("select").length) {
            tr.push($(this).find("select").val());
          } else {
            tr.push($(this).html());
          }
        });
      tableData.push(tr);
    });
    return tableData;
};
function checkInput() {
    let check = true;
    $(".save-data").each(function() {
      if ($(this).hasClass("no-input")) {
        check = false;
        console.log(1)
      }
    });
    if ($("#summary__table tbody tr").hasClass("selected-record")) {
      check = false;
    }
    if (check) {
      $("#save").attr("disabled", false);
    } else {
      $("#save").attr("disabled", true);
    } 
    if ($("#summary__table tbody tr").hasClass("selected-record")) {
        $("#update").attr("disabled", false);
    } else {
        $("#update").attr("disabled", true);
    }
    return check;
};