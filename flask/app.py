from flask import Flask, render_template, redirect, url_for
app = Flask(__name__)


@app.route('/')
def index():
    return render_template('/LoginU.html')


@app.route('/CrearCuentaU')
def crear_cuenta():
    return render_template('/CrearCuentaU.html')


@app.route('/ResumenPedidosU')
def resumen():
    return render_template('/ResumenPedidosU.html')


@app.route('/CatalogoU')
def catalogo():
    return render_template('/CatalogoU.html')


@app.route('/ResumenPedidosU')
def resumenpedidos():
    return render_template('/ResumenPedidosU.html')


@app.route('/EstatusPedidoU')
def estatuspedido():
    return render_template('/EstatusPedidoU.html')


@app.route('/PedidosEnCursoU')
def pedidosencurso():
    return render_template('/PedidosEnCursoU.html')


@app.route('/StockU')
def stocku():
    return render_template('/StockU.html')


@app.route('/CancelarPedidoU    ')
def cancelarpedido():
    return render_template('/CancelarPedidoU.html')


if __name__ == "__main__":
    app.run(debug=True)