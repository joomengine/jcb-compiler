```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Javascriptcustomview (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Model**
> extends: ****
```uml
@startuml
class Javascriptcustomview  #Gold {
  # array $areas
  # array $guiMapper
  # Customcode $customcode
  # Gui $gui
  + __construct(?Customcode $customcode = null, ?Gui $gui = null)
  + set(object $item, string $table = 'site_view') : void
}

note right of Javascriptcustomview::__construct
  Constructor

  since: 3.2.0
end note

note right of Javascriptcustomview::set
  Set Javascript code

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

