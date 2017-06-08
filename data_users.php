<?php
$userswitch = array(
  "julia_default" => array(
    "name" => "Julia Rijcke {Support - Start}",
    "circle" => "Support & Consultancy",
    "dash_order" => array(
      "panel_meldingmaken.php", "panel_supportinbox.php", "panel_notes.php", "panel_issuelog.php", "panel_contact.php"
    ),
    "mostusedcontacts" => array(
      array(
        "firstname" => "Erica",
        "fullname" => "Erica Broere",
        "preferred" => "Skype",
        "circle" =>  "Support & Consultancy",
        "role" => array("Communicator outage role?", "Sales CM/OBE")
      ), array(
        "firstname" => "Liliane",
        "fullname" => "Liliane Jansen",
        "preferred" => "Workplace",
        "circle" =>  "Support & Consultancy",
        "role" => array("Support PMS/POS"),
        "notification" => "Maaike used to have this role"
      ), array(
        "firstname" => "Florien",
        "fullname" => "Florien van Hell",
        "preferred" => "Email",
        "extern" =>  "Booking.com",
      ), array(
        "firstname" => "Suzanne",
        "fullname" => "Suzanne Oude Avenhuis",
        "preferred" => "Skype",
        "circle" =>  "Support & Consultancy",
        "role" => array("Fake persona")
      )
    ),
    "dash_contact" => array(
      array(
        "name" => "Florien | Booking.com",
        "thumb" => "bookingcom.jpg",
        "method" => "Email",
        "message" => "Hierbij bevestig... skypeafspraaak aanstaande dinsdag 9:15...",
        "actions" => "Add to calendar"
      ), array(
        "name" => "Suzanne",
        "thumb" => "unknown.jpg",
        "method" => "Workpace",
        "message" => "Wil jij voor woensdag... navragen aan Hotel Bistro Florian ... contactgegevens correct? ",
        "actions" => "Add to tasks"
      ), array(
        "name" => "Liliane",
        "thumb" => "liliane.jpg",
        "method" => "Skype",
        "message" => "Wie is eigenlijk nu verantwoordelijk om de outage te melden?",
        "actions" => "Answer",
        "reply" => "Volgens Glassfrog is dat Erica Broere"
      )
    ),
    "dash_supportinbox" => array(
      array(
        "name" => "Hotel de Gouden Leeuw",
        "thumb" => "goudenleeuw.jpg",
        "method" => "Email",
        "message" => "Channel manager doet het niet... Google Chrome... onbeveiligd certificaat",
        "actions" => "Report bug"
      ), array(
        "name" => "Hotel Bergse Bossen",
        "thumb" => "unknown.jpg",
        "method" => "Email",
        "message" => "Wanneer ... Channel Manager ... iPad-versie",
        "actions" => "Report RFC"
      )
    ),
    "notes" => array("OneNote", "onenote.jpg"),
    "clippy" => "julia_default",
    "apps" => array(
      array("skype.png", "Skype", "02b4eb"),
      array("workplace.png", "Facebook Workplace", "3a3e4a"),
      array("hubspot.png", "Hubspot", "f7761f"),
      array("excelfile.png", "Opzeggingen.xlsx", "0072c6"),
      array("outlook.png", "Microsoft Outlook", "0072c6"),
      array("wordfile.png", "Factuur template.dotx", "0072c6"),
      array("onenote.png", "OneNote", "7d3777"),
      array("bookingcom.png", "Booking.com", "014880"),
      array("whatsapp.png", "Whatsapp Web", "009846"),
      array("excelfile.png", "Another Excel file.xlsx", "0072c6")
    )
  ),

  "julia_mailtijd" => array(
    "name" => "Julia Rijcke {Support - 11:30 Mailtijd}",
    "circle" => "Support & Consultancy",
    "dash_order" => array(
      "panel_contact.php", "panel_supportinbox.php", "panel_meldingmaken.php", "panel_notes.php", "panel_issuelog.php",
    ),
    "mostusedcontacts" => array(
      array(
        "firstname" => "Erica",
        "fullname" => "Erica Broere",
        "preferred" => "Skype",
        "circle" =>  "Support & Consultancy",
        "role" => array("Communicator outage role?", "Sales CM/OBE")
      ), array(
        "firstname" => "Liliane",
        "fullname" => "Liliane Jansen",
        "preferred" => "Workplace",
        "circle" =>  "Support & Consultancy",
        "role" => array("Support PMS/POS"),
        "notification" => "Maaike used to have this role"
      ), array(
        "firstname" => "Florien",
        "fullname" => "Florien van Hell",
        "preferred" => "Email",
        "extern" =>  "Booking.com",
      ), array(
        "firstname" => "Suzanne",
        "fullname" => "Suzanne Oude Avenhuis",
        "preferred" => "Skype",
        "circle" =>  "Support & Consultancy",
        "role" => array("Fake persona")
      )
    ),
    "dash_contact" => array(
      array(
        "name" => "Florien | Booking.com",
        "thumb" => "bookingcom.jpg",
        "method" => "Email",
        "message" => "Hierbij bevestig... skypeafspraaak aanstaande dinsdag 9:15...",
        "actions" => "Add to calendar"
      ), array(
        "name" => "Suzanne",
        "thumb" => "unknown.jpg",
        "method" => "Workpace",
        "message" => "Wil jij voor woensdag... navragen aan Hotel Bistro Florian ... contactgegevens correct? ",
        "actions" => "Add to tasks"
      ), array(
        "name" => "Liliane",
        "thumb" => "liliane.jpg",
        "method" => "Skype",
        "message" => "Wie is eigenlijk nu verantwoordelijk om de outage te melden?",
        "actions" => "Answer",
        "reply" => "Volgens Glassfrog is dat Erica Broere"
      )
    ),
    "dash_supportinbox" => array(),
    "notes" => array("OneNote", "onenote.jpg"),
    "clippy" => "julia_mailtijd",
    "apps" => array(
      array("outlook.png", "Microsoft Outlook", "0072c6"),
      array("skype.png", "Skype", "02b4eb"),
      array("whatsapp.png", "Whatsapp Web", "009846"),
      array("workplace.png", "Facebook Workplace", "3a3e4a"),
      array("hubspot.png", "Hubspot", "f7761f"),
      array("excelfile.png", "Opzeggingen.xlsx", "0072c6"),
      array("wordfile.png", "Factuur template.dotx", "0072c6"),
      array("onenote.png", "OneNote", "7d3777"),
      array("bookingcom.png", "Booking.com", "014880"),
      array("excelfile.png", "Another Excel file.xlsx", "0072c6")
    )
  ),

  "daniel" => array(
    "name" => "Daniel Steenbakker {Development}",
    "circle" => "Support & Consultancy",
    "dash_order" => array(
      "panel_notes.php", "panel_contact.php", "panel_empty.php", "panel_issuelog.php", "panel_empty.php"
    ),
    "mostusedcontacts" => array(
      array(
        "firstname" => "Willem",
        "fullname" => "Willem van Dijjssel",
        "preferred" => "Workplace",
        "circle" =>  "Smart Switch Development",
        "role" => array("Database Administrator")
      ), array(
        "firstname" => "Suzanne",
        "fullname" => "Suzanne Oude Avenhuis",
        "preferred" => "Email",
        "circle" =>  "Support & Consultancy",
        "role" => array("Support PMS/POS"),
      ), array(
        "firstname" => "Gregory",
        "fullname" => "Gregory Shaw",
        "preferred" => "Skype",
        "circle" =>  "Development",
        "role" => array("Development Operations")
      ), array(
        "firstname" => "Niek",
        "fullname" => "Niek Hoebers",
        "preferred" => "Skype",
        "circle" =>  "Development",
        "role" => array("UX/Graphic Design")
      ), array(
        "firstname" => "Rene",
        "fullname" => "Rene van der Sleen",
        "preferred" => "Skype",
        "circle" =>  "Development",
        "role" => array("Bug ninja"),
        "notification" => "Rene vervangt de rol van Niels"
      )
    ),
    "dash_contact" => array(),
    "dash_supportinbox" => array(),
    "notes" => array("Todoist", "todoist.jpg"),
    "clippy" => "daniel",
    "apps" => array(
      array("skype.png", "Skype", "02b4eb"),
      array("vsts.jpg", "Visual Studio", "5b2d90"),
      array("outlook.png", "Microsoft Outlook", "0072c6"),
      array("pdffile.png", "All guidelines for CS.pdf", "d24726"),
      array("whatsapp.png", "Whatsapp Web", "009846"),
      array("azure.png", "Azure", "0072c6"),
      array("stackoverflow.png", "Stack Overflow", "0072c6"),
      array("workplace.png", "Facebook Workplace", "3a3e4a"),
      array("github.png", "Github", "0d2636")
    )
  ),

  "sebastiaan_eindevrijdag" => array(
    "name" => "Sebastiaan Ipenburg {Marketing - Einde vrijdag}",
    "circle" => "Marketing",
    "dash_order" => array(
      "panel_contact.php", "panel_notes.php", "panel_empty.php", "panel_empty.php", "panel_empty.php"
    ),
    "mostusedcontacts" => array(
      array(
        "firstname" => "Derreck",
        "fullname" => "Derreck Weterings",
        "preferred" => "Email",
        "circle" =>  "Marketing",
        "role" => array("")
      ), array(
        "firstname" => "Marijke",
        "fullname" => "Marijke Remmelzwaan",
        "preferred" => "Workplace",
        "circle" =>  "Marketing",
        "role" => array(""),
      ),
    ),
    "dash_contact" => array(),
    "dash_supportinbox" => array(),
    "notes" => array("Evernote", "evernote.jpeg"),
    "clippy" => "sebastiaan_eindevrijdag",
    "apps" => array(
      array("hubspot.png", "Hubspot", "f7761f"),
      array("workplace.png", "Facebook Workplace", "3a3e4a"),
      array("outlook.png", "Microsoft Outlook", "0072c6"),
      array("skype.png", "Skype", "02b4eb"),
      array("whatsapp.png", "Whatsapp Web", "009846"),
      array("evernote.png", "Evernote", "61ab02")
    )
  ),
)
?>
