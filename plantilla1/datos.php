<?php

function proyectos()
{
    $pagina_detalle = "proyecto_detalles.php";

    $PROYECTOS_ARRAY = [

        array(
            "ID" => "0",
            "NOMBRE" => "PROYECTO 1",
            "DURACION" => "6 MESES",
            "IMG_BACKGROUND" => "assets/images/service/1.jpg",
            "LINK_DETALLE" => $pagina_detalle . "?ID=1",
            "DETALLES_PR" => array(
                "CLIENTE" => "cliente 1",
                "LOCALIZACION" => "sector 1",
                "SECTOR" => "sector 1",
                "DURACION" => "6 MESES",
                "DESCRIPCION" => "Aqui va la descripcion del proyecto",
                "IMAGENES_PRINCIPALES" => [
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",
                ],
                "GALERIA" => [
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",

                ]
            ),

        ),
        array(
            "ID" => "1",
            "NOMBRE" => "PROYECTO 2",
            "DURACION" => "6 MESES",
            "IMG_BACKGROUND" => "assets/images/service/2.jpg",
            "LINK_DETALLE" => $pagina_detalle . "?ID=2",
            "DETALLES_PR" => array(
                "CLIENTE" => "cliente 1",
                "LOCALIZACION" => "sector 1",
                "SECTOR" => "sector 1",
                "DURACION" => "6 MESES",
                "DESCRIPCION" => "Aqui va la descripcion del proyecto",
                "IMAGENES_PRINCIPALES" => [
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",
                ],
                "GALERIA" => [
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",

                ]
            ),
        ),
        array(
            "ID" => "2",
            "NOMBRE" => "PROYECTO 3",
            "DURACION" => "6 MESES",
            "IMG_BACKGROUND" => "assets/images/service/3.jpg",
            "LINK_DETALLE" => $pagina_detalle . "?ID=2",
            "DETALLES_PR" => array(
                "CLIENTE" => "cliente 1",
                "LOCALIZACION" => "sector 1",
                "SECTOR" => "sector 1",
                "DURACION" => "6 MESES",
                "DESCRIPCION" => "Aqui va la descripcion del proyecto",
                "IMAGENES_PRINCIPALES" => [
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",
                ],
                "GALERIA" => [
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",

                ]
            ),
        ),

    ];



    return $PROYECTOS_ARRAY;
}

function Servicios()
{
    $pagina_detalle = "servicios_detalles.php";

    $SERVICIOS_ARRAY = [

        array(
            "ID" => "0",
            "NOMBRE" => "TRABAJOS ELECTRICOS",
            "IMG_BACKGROUND" => "assets/images/service/1.jpg",
            "LINK_DETALLE" => $pagina_detalle . "?ID=0",
            "DESCRIPCION" => "Instalaciones de tableros, acometida electrica,
            puntos eléctricos, reordenamiento de cableado,
            luminarias, reubicaciones",
            "DETALLES_PR" => array(
                "IMAGENES_PRINCIPALES" => [
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",
                ],
                "GALERIA" => [
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",

                ]
            ),

        ),
        array(
            "ID" => "1",
            "NOMBRE" => "SOLDADURA",
            "IMG_BACKGROUND" => "assets/images/service/2.jpg",
            "LINK_DETALLE" => $pagina_detalle . "?ID=1",
            "DESCRIPCION" => "Soldadura en cobre, aluminio y acero inoxidable,
            fabricación de estructuras metálicas, techados,
            galpones, instalación de cercos y mallas metálicas,
            etc.",
            "DETALLES_PR" => array(
                "IMAGENES_PRINCIPALES" => [
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",
                ],
                "GALERIA" => [
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",

                ]
            ),
        ),
        array(
            "ID" => "2",
            "NOMBRE" => "LIMPIEZA",
            "IMG_BACKGROUND" => "assets/images/service/3.jpg",
            "LINK_DETALLE" => $pagina_detalle . "?ID=2",
            "DESCRIPCION" => "Limpieza en todo tipo de área, esterilización de
            área, se cuenta con hidrolavadora, desengrasante e
            implementos de limpieza (oficinas, interiores,
            Talleres, Grúas gantry, grúas MHC, grúas Stacker,
            corte de maleza, terrenos y patios.) etc.…
            ",


            "DETALLES_PR" => array(
                "CLIENTE" => "cliente 1",
                "LOCALIZACION" => "sector 1",
                "SECTOR" => "sector 1",
                "DURACION" => "6 MESES",
                "IMAGENES_PRINCIPALES" => [
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",
                ],
                "GALERIA" => [
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",

                ]
            ),
        ),
        array(
            "ID" => "3",
            "NOMBRE" => "PINTURA",
            "IMG_BACKGROUND" => "assets/images/service/4.jpg",
            "LINK_DETALLE" => $pagina_detalle . "?ID=3",
            "DESCRIPCION" => "Aceras, iluminación vial, tráfico y peatonales,
            señalizaciones, trabajo de pintura en toda área y
            tipo (anticorrosivo, epóxica, látex, trafico,
            impermeable, satinado, aqua) etc",

            "DETALLES_PR" => array(
                "CLIENTE" => "cliente 1",
                "LOCALIZACION" => "sector 1",
                "SECTOR" => "sector 1",
                "DURACION" => "6 MESES",
                "DESCRIPCION" => "Aqui va la descripcion del proyecto",
                "IMAGENES_PRINCIPALES" => [
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",
                ],
                "GALERIA" => [
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",

                ]
            ),
        ),
        array(
            "ID" => "4",
            "NOMBRE" => "TUMBADOS",
            "IMG_BACKGROUND" => "assets/images/service/5.jpg",
            "LINK_DETALLE" => $pagina_detalle . "?ID=4",
            "DESCRIPCION" => "Cielo raso, fibra cemento, gypsum (obras nuevas y
            remodelaciones) etc…",

            "DETALLES_PR" => array(
                "CLIENTE" => "cliente 1",
                "LOCALIZACION" => "sector 1",
                "SECTOR" => "sector 1",
                "DURACION" => "6 MESES",
                "DESCRIPCION" => "Aqui va la descripcion del proyecto",
                "IMAGENES_PRINCIPALES" => [
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",
                ],
                "GALERIA" => [
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",

                ]
            ),
        ),
        array(
            "ID" => "5",
            "NOMBRE" => "OBRA CIVIL",
            "IMG_BACKGROUND" => "assets/images/service/6.jpg",
            "LINK_DETALLE" => $pagina_detalle . "?ID=5",
            "DESCRIPCION" => "Mampostería, aluminio y vidrio, enchapes,
            revestimientos, Señaléticas (Guardavías, reductores
            de velocidad), áreas verdes, adoquinado, etc…",

            "DETALLES_PR" => array(
                "CLIENTE" => "cliente 1",
                "LOCALIZACION" => "sector 1",
                "DESCRIPCION" => "Aqui va la descripcion del proyecto",
                "IMAGENES_PRINCIPALES" => [
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",
                ],
                "GALERIA" => [
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",

                ]
            ),
        ),
        array(
            "ID" => "6",
            "NOMBRE" => "CLIMATIZACION",
            "IMG_BACKGROUND" => "assets/images/service/7.jpg",
            "LINK_DETALLE" => $pagina_detalle . "?ID=6",
            "DESCRIPCION" => "Instalación, mantenimiento preventivo,
            predictivo y correctivo, suministro,
            reubicación, etc…",

            "DETALLES_PR" => array(
                "CLIENTE" => "cliente 1",
                "LOCALIZACION" => "sector 1",
                "SECTOR" => "sector 1",
                "DURACION" => "6 MESES",
                "DESCRIPCION" => "Aqui va la descripcion del proyecto",
                "IMAGENES_PRINCIPALES" => [
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",
                ],
                "GALERIA" => [
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",

                ]
            ),
        ),
        array(
            "ID" => "7",
            "NOMBRE" => "SEÑALETICA",
            "IMG_BACKGROUND" => "assets/images/service/8.jpg",
            "LINK_DETALLE" => $pagina_detalle . "?ID=7",
            "DESCRIPCION" => "Instalación de señalética de prohibición,
            obligación, sistema contraincendios, carteleras, etc.",

            "DETALLES_PR" => array(
                "CLIENTE" => "cliente 1",
                "LOCALIZACION" => "sector 1",
                "SECTOR" => "sector 1",
                "DURACION" => "6 MESES",
                "DESCRIPCION" => "Aqui va la descripcion del proyecto",
                "IMAGENES_PRINCIPALES" => [
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",
                ],
                "GALERIA" => [
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",
                    "assets/images/blog/big-images/1.jpg",
                    "assets/images/blog/big-images/2.jpg",
                    "assets/images/blog/big-images/3.jpg",
                    "assets/images/blog/big-images/4.jpg",

                ]
            ),
        ),
    ];



    return $SERVICIOS_ARRAY;
}

function RUTAS()
{

    $ARRAY_RUTAS = [
        array(
            "LINK" => "index.php",
            "NOMBRE" => "INICIO"
        ),
        array(
            "LINK" => "servicios.php",
            "NOMBRE" => "SERVICIOS"
        ),
        array(
            "LINK" => "proyectos.php",
            "NOMBRE" => "PROYECTOS"
        ),
        array(
            "LINK" => "contactos.php",
            "NOMBRE" => "CONTACTOS"
        ),
        array(
            "LINK" => "acerca.php",
            "NOMBRE" => "QUIENES SOMOS"
        ),
    ];

    return $ARRAY_RUTAS;
}

function ACERCA()
{

    $ARRAY_ACERCA = [
        array(
            "VALOR1" => "TRABAJO EN EQUIPO",
            "VALOR2" => "ÉTICA",
            "VALOR3" => "INNOVACIÓN",
            "DES1" => "Fomentamos la participación de todos para lograr un objetivo
            común, compartiendo información y conocimientos.",
            "DES2" => "Actuamos con profesionalidad, respetando procedimientos , con
            actitud integra, respetando la confidencialidad de nuestros
            clientes.",
            "DES3" => "Promovemos mejoras continuas e innovamos para alcanzar la
            máxima calidad desde criterios de rentabilidad.",
        ),
        array(
            array(
                "EMP1" => "NOMBRE 1",
                "EMP1_CARGO" => "CARGO 1",
                "EMP1_IMG" => "assets/images/team/2.jpg",
            ),
            array(
                "EMP1" => "NOMBRE 2",
                "EMP1_CARGO" => "CARGO 1",
                "EMP1_IMG" => "assets/images/team/3.jpg",


            ), array(
                "EMP1" => "NOMBRE 3",
                "EMP1_CARGO" => "CARGO 3",
                "EMP1_IMG" => "assets/images/team/1.jpg",


            ), array(
                "EMP1" => "NOMBRE 4",
                "EMP1_CARGO" => "CARGO 4",
                "EMP1_IMG" => "assets/images/team/4.jpg",


            ),
        )
    ];

    return $ARRAY_ACERCA;
}
