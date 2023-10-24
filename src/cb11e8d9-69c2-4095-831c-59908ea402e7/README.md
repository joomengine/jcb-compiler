```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Data (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Joomlamodule**
```uml
@startuml
class Data  #Gold {
  # array $data
  # Config $config
  # Customcode $customcode
  # Gui $gui
  # Placeholder $placeholder
  # Language $language
  # Field $field
  # Fieldname $fieldname
  # Filesfolders $filesfolders
  # Libraries $libraries
  # Dynamicget $dynamicget
  # Templatelayout $templatelayout
  + __construct(Config $config, Customcode $customcode, ...)
  + get(int $id = null) : object|array|null
  + exists(int $id = null) : bool
  + set(int $id) : bool
}

note right of Data::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Customcode $customcode
    Gui $gui
    Placeholder $placeholder
    Language $language
    Field $field
    Fieldname $fieldname
    Filesfolders $filesfolders
    Libraries $libraries
    Dynamicget $dynamicget
    Templatelayout $templatelayout
    ?\JDatabaseDriver $db = null
end note

note right of Data::get
  Get the Joomla Module/s

  since: 3.2.0
  return: object|array|null
end note

note right of Data::exists
  Check if the Joomla Module/s exists

  since: 3.2.0
  return: bool
end note

note right of Data::set
  Set the Joomla Module

  since: 3.2.0
  return: bool
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

