# 🌊 Acquaction Web App

Applicazione web sviluppata in PHP per la gestione di utenti, progetti idrici e newsletter, realizzata nel contesto del corso di **Sviluppo di Applicazioni Web (SAW)**.

---

## 📌 Descrizione

**Acquaction** è una piattaforma web ispirata a un’organizzazione no-profit che opera nell’Africa subsahariana, con l’obiettivo di migliorare l’accesso all’acqua potabile e ai servizi igienici.

L’applicazione consente agli utenti di:

* registrarsi e autenticarsi
* visualizzare progetti idrici
* gestire il proprio profilo
* iscriversi alla newsletter
* ricevere comunicazioni via email

---

## 🚀 Funzionalità principali

* Registrazione e autenticazione utenti
* Gestione del profilo
* Sistema di ricerca
* Visualizzazione dei progetti
* Sistema di newsletter
* Invio email tramite PHPMailer

---

## 🛠️ Tecnologie utilizzate

* **Backend:** PHP
* **Database:** MySQL
* **Frontend:** HTML, CSS, JavaScript
* **Librerie:** PHPMailer
* **Versionamento:** Git & GitHub

---

## 📁 Struttura del progetto

```id="n1q8w3"
acquaction-web-app/
│
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
│
├── auth/
│   ├── login.php
│   ├── logout.php
│   └── registration.php
│
├── includes/
│   ├── header.php
│   ├── header_log.php
│   └── connexionDB.php (escluso per sicurezza)
│
├── pages/
│   ├── index.php
│   ├── search.php
│   ├── seeprojects.php
│   ├── contactus.php
│   └── subscribe_newsletter.php
│
├── database/
│   ├── users.sql
│   └── projects.sql
│
└── README.md
```

---

## ⚙️ Installazione

1. Clonare il repository:

```bash id="x8v2s9"
git clone https://github.com/tuo-username/acquaction-web-app.git
```

2. Importare il database:

* Aprire phpMyAdmin
* Importare i file `.sql`

3. Configurare la connessione:

* Creare `connexionDB.php`
* Inserire le credenziali MySQL

4. Avviare un server locale (XAMPP, MAMP, ecc.)

---

## 🔒 Sicurezza

* I file sensibili sono esclusi tramite `.gitignore`
* Nessuna credenziale è presente nel repository

---

## 👨‍💻 Autore

**Danny Joel Kenfack**

---

## 📌 Note

Questo progetto è stato realizzato a scopo accademico e dimostra competenze nello sviluppo di applicazioni web full-stack con gestione utenti e database.
