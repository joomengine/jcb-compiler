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
  # Registry $registry
  # EventInterface $event
  # Placeholder $placeholder
  # Dispenser $dispenser
  # Customtabs $customtabs
  # Tabs $tabs
  # Fields $fields
  # Historyadminview $history
  # Permissions $permissions
  # Conditions $conditions
  # Relations $relations
  # Linkedviews $linkedviews
  # Javascriptadminview $javascript
  # Cssadminview $css
  # Phpadminview $php
  # Custombuttons $custombuttons
  # Customimportscripts $customimportscripts
  # Ajaxadmin $ajax
  # Customalias $customalias
  # Sql $sql
  # Mysqlsettings $mysqlsettings
  # \JDatabaseDriver $db
  + __construct(?Config $config = null, ?Registry $registry = null, ...)
  + get(int $id) : ?object
}

note right of Data::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Config $config = null
    ?Registry $registry = null
    ?EventInterface $event = null
    ?Placeholder $placeholder = null
    ?Dispenser $dispenser = null
    ?Customtabs $customtabs = null
    ?Tabs $tabs = null
    ?Fields $fields = null
    ?Historyadminview $history = null
    ?Permissions $permissions = null
    ?Conditions $conditions = null
    Relations $relations = null
    ?Linkedviews $linkedviews = null
    ?Javascriptadminview $javascript = null
    ?Cssadminview $css = null
    ?Phpadminview $php = null
    ?Custombuttons $custombuttons = null
    ?Customimportscripts $customimportscripts = null
    ?Ajaxadmin $ajax = null
    ?Customalias $customalias = null
    ?Sql $sql = null
    ?Mysqlsettings $mysqlsettings = null
    ?\JDatabaseDriver $db = null
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

