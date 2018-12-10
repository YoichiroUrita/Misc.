rem ## options ##
rem /a-d :file only
rem /b :file name and dir name only ( exclusive file list without time and size )
rem /o :order  N:order by name  E:order by extension  D:order by date  S:order by size  -:descending option 
dir /a-d /b /oN *.* >filelist.txt
