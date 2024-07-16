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
  # Config $config
  # EventInterface $event
  # Customcode $customcode
  # Gui $gui
  # Libraries $libraries
  # Templatelayout $templateLayout
  # Dynamicget $dynamic
  # Loader $loader
  # Javascriptcustomview $javascript
  # Csscustomview $css
  # Phpcustomview $php
  # Custombuttons $custombuttons
  # Ajaxcustomview $ajax
  # $db
  + __construct(?Config $config = null, ?EventInterface $event = null, ...)
  + get(int $id, string $table = 'site_view') : ?object
}

note right of Data::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Config $config = null
    ?EventInterface $event = null
    ?Customcode $customcode = null
    ?Gui $gui = null
    ?Libraries $libraries = null
    ?Templatelayout $templateLayout = null
    ?Dynamicget $dynamic = null
    ?Loader $loader = null
    ?Javascriptcustomview $javascript = null
    ?Csscustomview $css = null
    ?Phpcustomview $php = null
    ?Ajaxcustomview $ajax = null
    ?Custombuttons $custombuttons = null
end note

note right of Data::get
  Get all Custom View Data

  since: 3.2.0
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

