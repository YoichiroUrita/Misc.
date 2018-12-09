#refer from Mister @netsurfing_tubo https://www.tech-tech.xyz/python-pdf/
#input file define by arugment
#Y.Urita 0.0.0
import sys
from pdfminer.pdfinterp import PDFResourceManager, PDFPageInterpreter
from pdfminer.converter import TextConverter
from pdfminer.layout import LAParams
from pdfminer.pdfpage import PDFPage
from io import BytesIO as StringIO
args=sys.argv
rsrcmgr = PDFResourceManager()
codec = 'utf-8'
params = LAParams()
with StringIO() as output:
    device = TextConverter(rsrcmgr, output, codec=codec, laparams=params)
    with open(args[1], 'rb') as input:
        interpreter = PDFPageInterpreter(rsrcmgr, device)
        for page in PDFPage.get_pages(input):
            interpreter.process_page(page)
            print(output.getvalue())
    device.close()
