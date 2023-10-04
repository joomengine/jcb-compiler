```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Relations (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Model**
```uml
@startuml
class Relations  #Gold {
  # Config $config
  # Language $language
  # Customcode $customcode
  # ListJoin $listjoin
  # ListHeadOverride $listheadoverride
  # FieldRelations $fieldrelations
  + __construct(Config $config, Language $language, ...)
  + set(object $item) : void
}

note right of Relations::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Language $language
    Customcode $customcode
    ListJoin $listjoin
    ListHeadOverride $listheadoverride
    FieldRelations $fieldrelations
end note

note right of Relations::set
  Set the relations

  since: 3.2.0
  return: void
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

