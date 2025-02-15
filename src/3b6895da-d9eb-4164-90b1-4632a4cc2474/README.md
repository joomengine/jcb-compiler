```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Data (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Customview**

```uml
@startuml
class Data  #Gold {
  # array $data
  # array $index
  # Config $config
  # Event $event
  # Customcode $customcode
  # Gui $gui
  # Libraries $libraries
  # Templatelayout $templatelayout
  # Dynamicget $dynamic
  # Loader $loader
  # Javascriptcustomview $javascript
  # Csscustomview $css
  # Phpcustomview $php
  # Ajaxcustomview $ajax
  # Custombuttons $custombuttons
  # $db
  + __construct(Config $config, Event $event, ...)
  + get(mixed $view, string $table = 'site_view') : ?object
  - set(mixed $view, string $table) : void
  - getQuery(mixed $value, string $table, ...) : string
  - getData(string $query, string $table) : ?object
}

note right of Data::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Event $event
    Customcode $customcode
    Gui $gui
    Libraries $libraries
    Templatelayout $templatelayout
    Dynamicget $dynamicget
    Loader $loader
    Javascriptcustomview $javascriptcustomview
    Csscustomview $csscustomview
    Phpcustomview $phpcustomview
    Ajaxcustomview $ajaxcustomview
    Custombuttons $custombuttons
end note

note right of Data::get
  Get Custom/Site View Data

  since: 3.2.0
  return: ?object
end note

note right of Data::set
  Set the admin view

  since: 5.0.4
  return: void
end note

note right of Data::getQuery
  get current custom/site view data query

  since: 5.0.4
  return: string
  
  arguments:
    mixed $value
    string $table
    string $key = 'id'
end note

note right of Data::getData
  get custom/site view data

  since: 5.0.4
  return: ?object
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---3b6895da_d9eb_4164_90b1_4632a4cc2474---Power
```
> remember to replace the `---` with `___` to activate this Power in your code

---
```
     ██╗ ██████╗██████╗
     ██║██╔════╝██╔══██╗
     ██║██║     ██████╔╝
██   ██║██║     ██╔══██╗
╚█████╔╝╚██████╗██████╔╝
 ╚════╝  ╚═════╝╚═════╝
```
> Build with [Joomla Component Builder](https://git.vdm.dev/joomla/Component-Builder)

