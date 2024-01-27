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

