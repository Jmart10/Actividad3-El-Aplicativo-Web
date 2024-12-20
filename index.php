
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soporte</title>
    <link rel="stylesheet" href="estilos.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://cdn.tiny.cloud/1/2svgzkoljrbblvthd51neex8f0acv3xehqi4ptmii13bc5fd/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
    
</head>
<body>
    
    <section class="ver">
        <div class="opaco">
            
            <div class="nuevo">
                <h1>Agregar solución</h1>
                <div class="close_modal">
                    <box-icon name='x-circle'></box-icon>  
                </div>
            </div>
            
            <form method="POST" class="formulario" id="formulario">
                <input type="text" name="titulo" id="titulo" placeholder=" Titulo" class="general titulo">
                <select name="modulo" id="modulo"  class="general estado">
                    <option disabled selected>-Elige una catagoría-</option>
                    <option value="1">Cartera</option>
                    <option value="2">Evaluación</option>
                    <option value="3">Informes</option>
                    <option value="4">Matriculas</option>
                    <option value="5">Permisos y roles</option>
                    <option value="6">Plan de estudios</option>
                    <option value="7">Prematriculas</option>
                    <option value="8">Promoción</option>
                    <option value="9">Social</option>
                    <option value="10">Usuarios</option>
                    <option value="11">Variables</option>
                </select>
                <div class="descripcion">
                    <script>
                        tinymce.init({
                            selector: '#description-text',
                            width: '100%',
                            height: '100%',
                            plugins: [
                            // Core editing feature
                            ],
                            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                        });
                        </script>
                        <textarea id="description-text" placeholder="Describe aquí:">
                        
                        </textarea>
                </div>
                <input type="text" name="video" id="video" placeholder="Ingresa enlace a tutorial" class="general titulo">
                <div class="btn-formulario">
                    <input type="submit" class="btn_form guardar" value="Guardar">
                    <button type="button" class="btn_form cerrar">Cancelar</button>
                </div>
                
            </form>  
        </div>
    </section>  
    <section class="open_editar">
        <div class="bcg_open_edit">
            
            <div class="edit_register">
                <h1 class = "h1modal">Editar registro</h1>
                <div class="close_modal_edit">
                    <box-icon name='x-circle'></box-icon>  
                </div>
            </div>
            
            <form method="POST" class="formulario_edit" id="formulario_edit">
                <input type="hidden" id="id_editar" name="id">
                <input type="text" name="titulo" id="titulo_editar" placeholder=" Titulo" class="general_edit titulo_editar">
                <select name="modulo_editar" id="modulo_editar"  class="general_edit estado_editar">
                    <option disabled selected>-Elige una catagoría-</option>
                    <option value="1">Cartera</option>
                    <option value="2">Evaluación</option>
                    <option value="3">Informes</option>
                    <option value="4">Matriculas</option>
                    <option value="5">Permisos y roles</option>
                    <option value="6">Plan de estudios</option>
                    <option value="7">Prematriculas</option>
                    <option value="8">Promoción</option>
                    <option value="9">Social</option>
                    <option value="10">Usuarios</option>
                    <option value="11">Variables</option>
                </select>
                <div class="descripcion_edit">
                    <script>
                        tinymce.init({
                            selector: '#description-text-edit',
                            width: '100%',
                            height: '100%',
                            plugins: [
                            // Core editing feature
                            ],
                            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                             
                        });
                        </script>
                        <textarea id="description-text-edit" placeholder="Describe aquí:">
                        
                        </textarea>
                </div>
                <input type="text" name="video" id="video_youtube" placeholder="Ingresa enlace a tutorial" class="general youtube">
                <div class="btn-formulario">
                    <input type="submit" class="btn_form guardar_editar" value="Guardar">
                    <button type="button" class="btn_form btn_cerrar_editar">Cancelar</button>
                </div>
                
            </form>  
        </div>
    </section>  
     <nav>
        <div class="perfil">
            <img src="src/logo-nusoft-blanco.png" alt="logo Nusoft">
            <div class="perfil2">
                <h1>J</h1>
            </div>
        </div>
    </nav>

     <div class="filter">
        <div class="search">
            <div class="icono">
                <input class="buscando" name="query" type="search" placeholder="Buscar por id, palabras clave" >     
            </div>
            <div class="categories">
                <select name="categories" id="categories" class="select">
                    <option disabled selected>-Elige una catagoría-</option>
                    <option value="1">Cartera</option>
                    <option value="2">Evaluación</option>
                    <option value="3">Informes</option>
                    <option value="4">Matriculas</option>
                    <option value="5">Permisos y roles</option>
                    <option value="6">Plan de estudios</option>
                    <option value="7">Prematriculas</option>
                    <option value="8">Promoción</option>
                    <option value="9">Social</option>
                    <option value="10">Usuarios</option>
                    <option value="11">Variables</option>
                    
                </select>
                <box-icon name='search-alt-2' class="buscar"></box-icon>
            </div>
        </div>
        <div class="contenedor-add">
            <div class="add">
                <button class="agregar">Agregar  <box-icon class="icon" name='plus-circle'></box-icon></button>
            </div>
        </div>
    </div> <!--Cierra sección del filtro, select y botón agregar -->


    
    <main class="table">
        <section class="table_body">
            <table id="tabla">
                <thead>
                    <tr class="titulo_tabla">
                        <th class ="id-table">Id</th>
                        <th class ="title-table">Titulo</th>
                        <th class ="description-table">Descripción</th>
                        <th class ="category-table">Categoría</th>
                        <th class ="actions-table">Acciones</th>
                    </tr>
                </thead>
                <tbody> 
                    <tr>
                        <td>1</td>
                        <td>¿Cómo documentar procesos?</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus aut quae sint officia possimus eligendi commodi consequuntur doloremque hic blanditiis. Maiores, nisi itaque! Atque dolore, unde voluptatum suscipit distinctio facilis?</td>
                        <td>Procesos</td>
                        <td class="botones">
                            <box-icon name='edit-alt' type='solid' class="editar-btn"></box-icon>
                            <box-icon name='x-circle' class="eliminar-btn"></box-icon>                    
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>¿Cómo eliminar una fila?</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus aut quae sint officia possimus eligendi commodi consequuntur doloremque hic blanditiis. Maiores, nisi itaque! Atque dolore, unde voluptatum suscipit distinctio facilis?</td>
                        <td>Procesos</td>
                        <td class="botones">
                            <box-icon name='edit-alt' type='solid' class="editar-btn"></box-icon>
                            <box-icon name='x-circle' class="eliminar-btn"></box-icon>                    
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>¿Cómo crear un nuevo registro?</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus aut quae sint officia possimus eligendi commodi consequuntur doloremque hic blanditiis. Maiores, nisi itaque! Atque dolore, unde voluptatum suscipit distinctio facilis?</td>
                        <td>Procesos</td>
                        <td class="botones">
                            <box-icon name='edit-alt' type='solid' class="editar-btn"></box-icon>
                            <box-icon name='x-circle' class="eliminar-btn"></box-icon>                    
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>¿Cómo eliminar un registro?</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus aut quae sint officia possimus eligendi commodi consequuntur doloremque hic blanditiis. Maiores, nisi itaque! Atque dolore, unde voluptatum suscipit distinctio facilis?</td>
                        <td>Procesos</td>
                        <td class="botones">
                            <box-icon name='edit-alt' type='solid' class="editar-btn"></box-icon>
                            <box-icon name='x-circle' class="eliminar-btn"></box-icon>                    
                        </td>
                    </tr>
                        
                </tbody>
            </table>
        </section>
    </main>
    <script src="app.js"></script>
</body>
</html>