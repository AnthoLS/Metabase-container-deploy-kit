# METABASE CONTAINER DEPLOY KIT 

> This kit is structured to build a fast and useful POC for Metabase testing

## Deploy

To deploy this kit, first unzip it and be sure that **all the files** are in the **same folder**.

Next, you can run in the folder  :
```docker-compose up --build```

## Sample Database Import

In the files, you have _sampleDB.sql_. 

It's very simple to import it, you have just to go in the import menu of **PHPMyAdmin**, and select this file.

Don't touch any ohter parameters and **_magic_** all the data is here !

## Metabase connection

Create in your _PHPMyAdmin_ a user named **metabase** with the password you want. If ou don't do this, **_it will not be possible_** for you to link your database into Metabase dashboard.

Next into the connection menu, you have to **disable RSA** for your connection. This container is made for testing, so we don't have to ue RSA. 

To do this run this command into the JDBC additional options :
```?useSSL=false&allowPublicKeyRetrieval=true```

Now, you have linked the database in your Metabase !
> GGs