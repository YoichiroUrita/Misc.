Option Explicit

'simple test for ExecuteExcel4Macro function
Sub ExecutExcel4MacroTest()

Dim obj As Variant
Dim path As String
Dim file As String

path = "C:\Users\username\Documents\"
file = "test1.xlsx"

'notice: top strings of bracket are double-single-double quotation marks
obj = ExecuteExcel4Macro("'" & path & "[" & file & "]Sheet1'!R1C1") 

End Sub
