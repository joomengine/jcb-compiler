```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Adminviews (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Model**
> extends: ****
```uml
@startuml
class Adminviews  #Gold {
  # Config $config
  # Admin $admin
  # SiteEditView $siteeditview
  # AdminFilterType $adminfiltertype
  + __construct(Config $config, Admin $admin, ...)
  + set(object $item) : void
}

note right of Adminviews::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Admin $admin
    SiteEditView $siteeditview
    AdminFilterType $adminfiltertype
end note

note right of Adminviews::set
  Set admin view data

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

