<?php  
$now= time();
$fecha_hora= date("Y-m-d H:i:s", $now -6*3600);
$mensaje_positivo_grave = "Notificación de resultado COVID- 19, Servicios de Salud de Sinaloa. ".$fecha_hora."                           

".$patient_info['NOMBRE_S']." ".$patient_info['APELLIDO_PATERNO']." ".$patient_info['APELLIDO_MATERNO']."                                                 "."    ".
"Su resultado para COVID- 19 ya está listo: Resultado POSITIVO en este momento."." Su prueba fue tomada el día: ".$patient_info['FECHA_TOMA_MUESTRA']."              

"."Recomendaciones:

Monitorea tus síntomas: dificultad para respirar, dolor Torácico, tos, mal estado general, alteración de la conciencia, en caso de no estar hospitalizado, será necesario acudir al Hospital de Derechohabiencia más cercano para tú valoración inmediata (IMSS, ISSSTE, SEDENA, SEMAR), ó bien si usted no tiene derechohabiencia podrá acudir a los Hospitales de los Servicios de Salud de Sinaloa.



*Para solicitar una ambulancia llame inmediatamente al teléfono 6677130063 del CALL CENTER de los Servicios de Salud de Sinaloa (mencione que su resultado ha sido positivo a SARS-COV-2).
";

$mensaje_positivo_nograve = "Notificación de resultado COVID- 19, Servicios de Salud de Sinaloa. ".$fecha_hora."                           

".$patient_info['NOMBRE_S']." ".$patient_info['APELLIDO_PATERNO']." ".$patient_info['APELLIDO_MATERNO']."                                                 "."    ".
"Su resultado para COVID- 19 ya está listo: Resultado POSITIVO en este momento."." Su prueba fue tomada el día: ".$patient_info['FECHA_TOMA_MUESTRA']."              

"."Recomendaciones para usted y su familia:

-Quédate en casa

-Monitorea tus síntomas

-Nutre tu cuerpo

-Lava tus manos 
 frecuentemente

-Estornudo de etiqueta

-Usa cubre bocas

-Uso de utensilios personales 
 para alimentación

-Control en la entrega de 
 alimentos a pacientes 
 infectados

-Control de excretas y otros 
 desechos corporales

-Manejo adecuado de basura, 
 ropa, ropa de cama del 
 paciente y familiares

-Limpieza de casa, habitación 
 y otras zonas infectadas


En caso de que sus síntomas empeoren (falta de aire y/o dificultad para respirar), será necesario acudir al hospital de derechohabiencia más cercano (IMSS, ISSSTE, SEDENA, SEMAR), ó bien si usted no tiene derechohabiencia podrá acudir a los Hospitales de los Servicios de Salud de Sinaloa.


Para mayor información, visita la pagina de la Secretaría de Salud del Estado: http://saludsinaloa.gob.mx/ "."
"."Para cualquier duda llame al teléfono 6677130063 del CALL CENTER de los Servicios de Salud de Sinaloa.";

$mensaje_negativo= "Notificación de resultado COVID- 19, Servicios de Salud de Sinaloa. ".$fecha_hora."                           

".$patient_info['NOMBRE_S']." ".$patient_info['APELLIDO_PATERNO']." ".$patient_info['APELLIDO_MATERNO']."                                                 "."    ".
"Su resultado para COVID- 19 ya está listo: Resultado NEGATIVO en este momento."." Su prueba fue tomada el día: ".$patient_info['FECHA_TOMA_MUESTRA']."              

"."Aún con este resultado es necesario seguir al pie de la letra las siguientes recomendaciones, cuidando de su salud y su entorno, ya que es posible lograr una infección por COVID-19 durante los próximos días.
	

-Quédate en casa
-Monitorea tus síntomas
-Nutre tu cuerpo
-Lava tus manos 
 frecuentemente
-Estornudo de etiqueta
-Usa cubre bocas

	"."
"."Para mayor información, visita la pagina de la Secretaría de Salud del Estado: http://saludsinaloa.gob.mx/ "."
"."Para cualquier duda llame al teléfono 6677130063 del CALL CENTER de los Servicios de Salud de Sinaloa.";

?>