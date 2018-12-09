# Misc.
Miscellaneous
---
# PDF to text
Sorry, this article is for Japanese.<br>
PDF24 printerを使ってPDFを作成したものからテキストを抜き出すと文字化けしていました。<br>
最初はphpのsmalot/PdfPaserを使って変換していて文字化けを起こしたので、他のを試そうと思いました。<br>
なかなかPDFからテキストを抽出できるものでインストールできるものが有りません。<br>
インストールしてあるPython2系統でも使えるpdfminer.sixを試したところが、やはり文字化けが。<br>
ただし、文字化けを起こしているところが(cid:****)という形で表記されます。<br>
数字はcidのmapとは一致しないので、手作業でマップを作るしかなさそう・・・<br>
で、作業をしている途中で気づいたのですが、MS-OfficeからPDFに直接変換する場合では文字化けは起こらなかったんです。<br>
なので、作業は途中でやめていますが、何かで使うこともあるかもと思いましたのでアップしておきます。<br>
<br>
<h3>textByPdfminer.py</h3>
これは、pdfminer.sixを使ってテキストを抽出するもの。<br>
でもPythonはわからないので、参照元のものをファイル名をプログラムの中で指定する方法から引数で渡す方法に変更しています。<br>
pdfminer.sixはatoumとインストールするためにpipが必要になります。<br>
自分は<a href="https://www.tech-tech.xyz/python-pdf/">こちら</a>を参考にさせて頂きました。<br>
<h3>PDFtoTextByPdfminer.six.php</h3>
こちらは、上記のファイルを外部実行してreplaceするもの。<br>
Pythonは全く設定していません。<br>
ところが、ブラウザで結果を見たかったのと、修正後に抽出したテキストをMySQLに渡す予定だったので、ある程度慣れているphpを選んでいます。<br>
