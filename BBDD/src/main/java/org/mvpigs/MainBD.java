//package org.mvpigs;
//
//import java.sql.ResultSet;
//import java.sql.Statement;
//import java.util.Scanner;
//
//public class MainBD {
//
//    private static Scanner keyboard = new Scanner(System.in);
//
//
//    public static void main(String args[]) {
//
//        Statement stmt  = null;
//
//        try {
//
//            String menu = "Opciones a realizar:" + "\n" +
//                    "1. Actualizar nombre usuario." + "\n" +
//                    "2. Lista Empleados." + "\n" +
//                    "3. Nuevo Empledo" + "\n" +
//                    "4. Borrar Empleado" + "\n" +
//                    "5. Empleados de una empresa" + "\n" +
//                    "6. Media de sueldo por empresa";
//
//
//            System.out.println(menu);
//
//            String input = keyboard.nextLine();
//            //Comprobar que la entrada es correcta.
//            int reader = Integer.parseInt(input);
//
//            switch (reader) {
//                case 1:
//                    accionActualizarUsario();
//                    break;
//                case 2:
//                    mostarListaEmpleados();
//                    break;
//                case 3:
//                    crearNuevoEmpleado();
//                    break;
//                case 4:
//                    eliminarEmpleado();
//                    break;
//                case 5:
//                    consultarEmpleadosEmpresa();
//                    break;
//                case 6:
//                    sueldoMedioTodasEmpresas();
//                    break;
//            }
//        } catch (Exception ex) {
//            System.out.println("¡ERROR!");
//        }
//    }
//
//    private static void sueldoMedioTodasEmpresas() {
//        String query = "SELECT DISTINCT empresa.nombre AS NombreEmpresa, seccion.nombre AS Seccion, AVG(nomina.sueldo) AS SueldoMedio FROM nomina JOIN empleados ON nomina.idNomina = empleados.Nomina_idNomina JOIN empresa_tiene_empleados ON empleados.idEmpleados = empresa_tiene_empleados.Empleados_idEmpleados JOIN empresa ON empresa_tiene_empleados.Empresa_idEmpresa = empresa.idEmpresa JOIN seccion ON empresa.Seccion_idSeccion = seccion.idSeccion GROUP BY NombreEmpresa";
//
//    }
//
//    private static void consultarEmpleadosEmpresa() {
//        System.out.println("Posibles empresas a consultar:");
//        String input = keyboard.nextLine();
//        int reader = Integer.parseInt(input);
//
//        String query = "SELECT Empleados" + reader;
//
//    }
//
//    private static void eliminarEmpleado() {
//        System.out.println("Selecciona el empleado a eliminar:");
//        String input = keyboard.nextLine();
//        int reader = Integer.parseInt(input);
//
//    }
//
//    private static void crearNuevoEmpleado() {
//        System.out.println("Nombre del empleado:");
//        String input = keyboard.nextLine();
//        int reader = Integer.parseInt(input);
//
//    }
//
//    private static void mostarListaEmpleados() {
//        String query = "Select idEmpleados, nombre, apellido, DNI, telefono from Empleados";
//
//        //Lanzar consulta
//        //Si correcta, recorrer el resultado mientras mostramos por pantalla
//
//    }
//
//    private static void accionActualizarUsario(Statement stmt) {
//        System.out.println("Que usuario desea actualizar?");
//        String query = "SELECT * FROM Empleados";
//        String input = keyboard.nextLine();
//        int reader = Integer.parseInt(input);
//        String query = "SELECT * FROM Empleados WHERE nombre=" + reader;
//        System.out.println("Que quieres cambiar?");
//
//        ResultSet rs = stmt.executeUpdate(query);
//
//        //Comprobar que la entrada es correcta.
//
//    }
//
//}
