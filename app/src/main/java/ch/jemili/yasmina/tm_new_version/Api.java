/**
 * Created by Yasmina on 31.03.18.
 */
package ch.jemili.yasmina.tm_new_version;

public class Api {
    private static final String ROOT_URL = "http://84.226.173.247/TMApi/v1/Api_TM.php?apicall=";

    public static final String URL_CREATE_USER = ROOT_URL + "createuser";
    public static final String URL_READ_USER = ROOT_URL + "getusers";
    public static final String URL_UPDATE_USER = ROOT_URL + "updateuser";
    public static final String URL_DELETE_USER = ROOT_URL + "deleteuser&ID=";
}
