```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Data (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Adminview**

```uml
@startuml
class Data  #Gold {
  # array $data
  # Config $config
  # Event $event
  # Placeholder $placeholder
  # Dispenser $dispenser
  # Customtabs $customtabs
  # Tabs $tabs
  # Fields $fields
  # History $history
  # Permissions $permissions
  # Conditions $conditions
  # Relations $relations
  # Linkedviews $linkedviews
  # Javascript $javascript
  # Css $css
  # Php $php
  # Custombuttons $custombuttons
  # Customimportscripts $customimportscripts
  # Ajax $ajax
  # Customalias $customalias
  # Sql $sql
  # Mysqlsettings $mysqlsettings
  # SiteEditView $siteeditview
  # $db
  + __construct(Config $config, Event $event, ...)
  + get(int $id) : ?object
}

note right of Data::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Event $event
    Placeholder $placeholder
    Dispenser $dispenser
    Customtabs $customtabs
    Tabs $tabs
    Fields $fields
    History $history
    Permissions $permissions
    Conditions $conditions
    Relations $relations
    Linkedviews $linkedviews
    Javascript $javascript
    Css $css
    Php $php
    Custombuttons $custombuttons
    Customimportscripts $customimportscripts
    Ajax $ajax
    Customalias $customalias
    Sql $sql
    Mysqlsettings $mysqlsettings
    SiteEditView $siteeditview
end note

note right of Data::get
  Get Admin View Data

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
Super---cef2815b_f72b_402a_b769_f028f676692d---Power
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

