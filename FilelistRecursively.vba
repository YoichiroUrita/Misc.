Option Explicit
Sub seekXlRecursively()
'refer from https://stevenfewster.com/code/recursively-list-all-files-folders-with-excel-vba/
'Y.Urita 2018/12/16
'//listFilesRecursively is called from this sub routine

Dim Path As String, fso As Object
Application.ScreenUpdating = False
Path = "C:\Users\" 'specify directory which you want to list
Set fso = CreateObject("Scripting.FileSystemObject")
   
   'start seeking
   Call listFilesRecursively(fso, Path)
   
   'fit column width
   ActiveSheet.Columns("a:b").Columns.AutoFit
Set fso = Nothing
Application.ScreenUpdating = True
End Sub

Sub listFilesRecursively(fso, folder)
'refer from https://stevenfewster.com/code/recursively-list-all-files-folders-with-excel-vba/
'Y.Urita 2018/12/16

Dim file As Object, recurFolder As Object, ext As String, refStr As String
ext = "pdf" 'specify extension for list

    'listing files you want
    For Each file In fso.getfolder(folder).Files 'seek files in current folder
        On Error Resume Next
        If file.Name Like "*." & ext Then 'get file name if extension is what you seek or not
            'write to sheet
            ActiveSheet.Range("A" & ActiveSheet.Rows.Count).End(xlUp).Offset(1, 0) = folder
            ActiveSheet.Range("B" & ActiveSheet.Rows.Count).End(xlUp).Offset(1, 0) = file.Name
        End If
    Next file

    'recursively seek
    For Each recurFolder In fso.getfolder(folder).subfolders
        Call listFilesRecursively(fso, folder & "\" & recurFolder.Name)
    Next recurFolder
End Sub
