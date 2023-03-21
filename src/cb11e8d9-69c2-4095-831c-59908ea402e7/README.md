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
  # FieldName $fieldName
  # Filesfolders $filesFolders
  # Libraries $libraries
  # Dynamicget $dynamic
  # \JDatabaseDriver $db
  + __construct(?Config $config = null, ?Customcode $customcode = null, ...)
  + get(int $id = null) : object|array|null
  + exists(int $id = null) : bool
  + set(int $id) : bool
}

note right of Data::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Config $config = null
    ?Customcode $customcode = null
    ?Gui $gui = null
    ?Placeholder $placeholder = null
    ?Language $language = null
    ?Field $field = null
    ?FieldName $fieldName = null
    ?Filesfolders $filesFolders = null
    ?Libraries $libraries = null
    ?Dynamicget $dynamic = null
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

