from flask import Flask, render_template
import glob

app = Flask(__name__)

def strip_dir(fname):
    newf = fname.replace("mysite/snd/", "")
    return newf

def make_filename(fname):
    newf = strip_dir(fname)
    newf = newf.replace(".mp3", "")
    newf = newf.replace("_", " ")
    return newf

snds = [(strip_dir(f), make_filename(f))
        for f in sorted(glob.glob("mysite/snd/*.mp3"))]

@app.route('/')
def takpage():
    return render_template('index.html', snds=snds)