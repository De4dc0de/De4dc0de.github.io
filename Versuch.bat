@ echo
echo B. Front
echo C. Left
echo D. Right
set /p input==ANSWER?
if %input%==A goto 3
goto Wrong
:3
echo Windshield wipers do what?
echo A. Serve as ballast on submersible cars
ech B. Remove dust from the car by using little fans
echo C. Wipe the windshield of water and/or dirt
echo D. Serve as decoration
set/p input=ANSWER?
goto WRONG
:WIN
type WIN.txt
echo.
echo.
set/p input=RETURN TO MAIN SCREEN (Y/N)?
if %input%==Y goto MAIN
if %input%==N exit