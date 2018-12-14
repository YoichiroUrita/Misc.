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
<h3><a href="textByPdfminer.py">textByPdfminer.py</a></h3>
これは、pdfminer.sixを使ってテキストを抽出するもの。<br>
でもPythonはわからないので、参照元のものをファイル名をプログラムの中で指定する方法から引数で渡す方法に変更しています。<br>
pdfminer.sixはatoumとインストールするためにpipが必要になります。<br>
自分は<a href="https://www.tech-tech.xyz/python-pdf/">こちら</a>を参考にさせて頂きました。<br>
<h3><a href="PDFtoTextByPdfminer.six.php">PDFtoTextByPdfminer.six.php</a></h3>
こちらは、上記のファイルを外部実行してreplaceするもの。<br>
Pythonは全く設定していません。<br>
ところが、ブラウザで結果を見たかったのと、修正後に抽出したテキストをMySQLに渡す予定だったので、ある程度慣れているphpを選んでいます。<br>

---

# Simple POST collector

My young co-worker asked "How to collect questionnaire by HTML ?", and she brought HTML written by a kind of old commercial HTML editor.<br>

I suggest this script(<a href="PostCollection.php">PostCollection.php</a>) , but it does not work....<br>

I checked HTML , and finally find out the point of problem as below.<br>

````html
  <FORM ENCTYPE="text/plain" NAME=".......>
````

<br>

After removed encrypt type attribution, It works well.&nbsp;:P

---

# <a href="MySQL_Connector.php">MySQL_Connector</a>

This class is wrapper for MySQL PDO.<br>

| PDO  | This class | Note |
|-----------| -----------|---|
| new PDO(***) | new mysql_connector | Parameters of connection are marked on head of this class |
| query(SQL) | Query(SQL) | Query() extract result directly. Fetch/FetchAll are not needed.(include) |
| prepare(SQL) | Prepare(SQL) | same as PDO |
| bindValue(PARAM,VALUE) | BindValue(PARAM,VALUE) | same as PDO |
| Excute() | ExFetch() | ExFetch() extract result directly. Fetch/FetchAll are not needed.(include) |

It makes you reduce typing. ^_^

---

# File list order by name for Windows

<a href="FilelistOrderByNameNotRecursive.bat">FilelistOrderByNameNotRecursive.bat</a> is listing files order by name and is NOT recursive search.<br>

See comments if you want another option.

---
