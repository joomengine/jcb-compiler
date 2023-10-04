```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Ajaxadmin (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Model**
```uml
@startuml
class Ajaxadmin  #Gold {
  # array $guiMapper
  # Config $config
  # SiteEditView $siteeditview
  # Dispenser $dispenser
  + __construct(Config $config, SiteEditView $siteeditview, ...)
  + set(object $item, string $table = 'admin_view') : void
}

note right of Ajaxadmin::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    SiteEditView $siteeditview
    Dispenser $dispenser
end note

note right of Ajaxadmin::set
  Set Ajax Code

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

