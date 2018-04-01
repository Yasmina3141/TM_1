package ch.jemili.yasmina.tm_new_version;

class User {
    private int ID;
    private String name;
    private String email_address;
    private String address;
    private String psswd;
    private boolean maths;
    private boolean physics;
    private boolean English;
    private boolean Monday_9;
    private boolean Monday_10;
    private boolean Monday_11;

    public User(int ID, String name, String email_address, String address, String psswd, boolean maths, boolean physics, boolean English, boolean Monday_9, boolean Monday_10, boolean Monday_11) {
        this.ID = ID;
        this.name = name;
        this.email_address = email_address;
        this.address = address;
        this.psswd = psswd;
        this.maths = maths;
        this.physics = physics;
        this.English = English;
        this.Monday_9 = Monday_9;
        this.Monday_10 = Monday_10;
        this.Monday_11 = Monday_11;
    }

    public int getID() {
        return ID;
    }

    public String getName() {
        return name;
    }

    public String getEmail_address() {
        return email_address;
    }

    public String getAddress() {
        return address;
    }

    public String getPsswd() {
        return psswd;
    }

    public boolean getMaths() {
        return maths;
    }

    public boolean getPhysics() {
        return physics;
    }

    public boolean getEnglish() {
        return English;
    }

    public boolean getMonday_9() {
        return Monday_9;
    }

    public boolean getMonday_10() {
        return Monday_10;
    }

    public boolean getMonday_11() {
        return Monday_11;
    }

}
