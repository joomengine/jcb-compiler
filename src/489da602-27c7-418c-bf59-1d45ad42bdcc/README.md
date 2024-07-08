```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Phpcustomview (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Model**
> extends: ****
```uml
@startuml
class Phpcustomview  #Gold {
  # array $areas
  # array $guiMapper
  # Customcode $customcode
  # Gui $gui
  # Loader $loader
  # Templatelayout $templateLayout
  + __construct(?Customcode $customcode = null, ?Gui $gui = null, ...)
  + set(object $item, string $table = 'site_view') : void
}

note right of Phpcustomview::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Customcode $customcode = null
    ?Gui $gui = null
    ?Loader $loader = null
    ?Templatelayout $templateLayout = null
end note

note right of Phpcustomview::set
  Set PHP code

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

