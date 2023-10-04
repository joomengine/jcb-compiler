```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Structuremultiple (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Component**
```uml
@startuml
class Structuremultiple << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Registry $registry
  # Settings $settings
  # Component $component
  # Createdate $createdate
  # Modifieddate $modifieddate
  # Structure $structure
  + __construct(?Config $config = null, ?Registry $registry = null, ...)
  + build() : bool
  # admin() : bool
  # site() : bool
  # custom() : bool
  - isValidAdminView(array $view, array $config) : bool
  - isValidView(array $view, array $config) : bool
  - buildAdminView(array $view, array $config) : void
  - buildView(array $view, array $config, ...) : void
}

note right of Structuremultiple::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Config $config = null
    ?Registry $registry = null
    ?Settings $settings = null
    ?Component $component = null
    ?Createdate $createdate = null
    ?Modifieddate $modifieddate = null
    ?Structure $structure = null
end note

note left of Structuremultiple::build
  Build the Multiple Files & Folders

  since: 3.2.0
  return: bool
end note

note right of Structuremultiple::admin
  Build the Dynamic Admin Files & Folders

  since: 3.2.0
  return: bool
end note

note left of Structuremultiple::site
  Build the Dynamic Site Files & Folders

  since: 3.2.0
  return: bool
end note

note right of Structuremultiple::custom
  Build the Dynamic Custom Admin Files & Folders

  since: 3.2.0
  return: bool
end note

note left of Structuremultiple::isValidAdminView
  Check if the view is a valid view

  since: 3.2.0
  return: bool
end note

note right of Structuremultiple::isValidView
  Check if the view is a valid view

  since: 3.2.0
  return: bool
end note

note left of Structuremultiple::buildAdminView
  Build the admin view

  since: 3.2.0
  return: void
end note

note right of Structuremultiple::buildView
  Build the custom view

  since: 3.2.0
  return: void
  
  arguments:
    array $view
    array $config
    string $type
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

