﻿using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class DataInserter : MonoBehaviour {

    public string inputUserName;
    public string inputPassword;
    public string inputEmail;

    string CreateUserURL = "http://localhost/puzluk/insertUser.php";

	// Use this for initialization
	void Start () {
		
	}
	
	// Update is called once per frame
	void Update () {
        if (Input.GetKeyDown(KeyCode.Space)) CreateUser(inputUserName, inputPassword, inputEmail);
	}

    public void CreateUser(string username, string password, string email)
    {
        WWWForm form = new WWWForm();
        form.AddField("usernamePost", username);
        form.AddField("passwordPost", password);
        form.AddField("emailPost", email);

        WWW userURL = new WWW(CreateUserURL, form);
    }
}
