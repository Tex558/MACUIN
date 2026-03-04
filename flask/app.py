from flask import Flask

# Crea una instancia de la aplicación Flask
app = Flask(__name__)

# Definir una ruta básica
@app.route('/')
def hello():
    return "¡Hola, mundo!"

# Ejecutar la aplicación
if __name__ == "__main__":
    app.run(debug=True)