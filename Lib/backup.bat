@echo off

 set dbUser=root
 set dbPassword=""
 set backupDir="C:\xampp\htdocs\Billet_Casting\Lib"
 set mysqldump="C:\xampp\mysql\bin\mysqldump.exe"
 set mysqlDataDir="C:\xampp\mysql\data"

for /f "tokens=2 delims==" %%a in ('wmic OS Get localdatetime /value') do set "dt=%%a"
     set "YY=%dt:~2,2%" & set "YYYY=%dt:~0,4%" & set "MM=%dt:~4,2%" & set "DD=%dt:~6,2%"
     set "HH=%dt:~8,2%" & set "Min=%dt:~10,2%" & set "Sec=%dt:~12,2%"

     set "datestamp=%YYYY%%MM%%DD%" & set "timestamp=%HH%%Min%%Sec%"
     set "fullstamp=%YYYY%%MM%%DD%_%HH%%Min%"
 pushd %mysqlDataDir%
<<<<<<< HEAD:Lib/database_backup.bat
 %mysqldump% --host="localhost" --user=%dbUser% --password=%dbPassword% --single-transaction --add-drop-table --all-databases > %backupDir%\%YYYY%\%MM%\%datestamp%".sql"
=======

 :: iterate over the folder structure in the "data" folder to get the databases
 for /d %%f in (*) do (

@REM  if not exist %backupDir%\%dirName%\ (
@REM       mkdir %backupDir%\%dirName%
 )

 %mysqldump% --host="localhost" --user=%dbUser% --password=%dbPassword% --single-transaction --add-drop-table --all-databases > %backupDir%\"database.sql"
>>>>>>> 7d1aa847ae4eca0741e3e3952fbda6c58f503cfa:Lib/backup.bat
