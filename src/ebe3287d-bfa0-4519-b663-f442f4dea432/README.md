```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Custombuttons (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Model**
> extends: ****
```uml
@startuml
class Custombuttons  #Gold {
  # array $areas
  # array $guiMapper
  # Customcode $customcode
  # Gui $gui
  # Templatelayout $templateLayout
  + __construct(?Customcode $customcode = null, ?Gui $gui = null, ...)
  + set(object $item, string $table = 'admin_view') : void
}

note right of Custombuttons::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Customcode $customcode = null
    ?Gui $gui = null
    ?Templatelayout $templateLayout = null
end note

note right of Custombuttons::set
  Set Custom Buttons and Model/Controllers

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

