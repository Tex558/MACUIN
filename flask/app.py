from flask import Flask, render_template, redirect, url_for
# Crea una instancia de la aplicación Flask
app = Flask(__name__)


@app.route('/')
def index():
    return render_template('/auth/LoginU.html')#


@app.route('/')
def index():
    return render_template('/auth/CrearCuentaU.html')#


@app.route('/')
def index():
    return render_template('/auth/ResumenPedidosU.html')


@app.route('/')
def index():
    return render_template('/auth/CatalogoU.html')#


@app.route('/')
def index():
    return render_template('/auth/ResumenPedidosU.html')#


@app.route('/')
def index():
    return render_template('/auth/EstatusPedidoU.html')#


@app.route('/')
def index():
    return render_template('/auth/PedidosEnCursoU.html')#


@app.route('/')
def index():
    return render_template('/auth/StockU.html')#


@app.route('/')
def index():
    return render_template('/auth/CancelarPedidoU.html')#


if __name__ == "__main__":
    app.run(debug=True)