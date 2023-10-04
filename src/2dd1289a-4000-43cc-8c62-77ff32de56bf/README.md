```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Adminview (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**
```uml
@startuml
class Adminview  #Gold {
  + register(Container $container) : void
  + getAdminviewData(Container $container) : AdminviewData
  + getAdminviewPermission(Container $container) : Permission
}

note right of Adminview::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of Adminview::getAdminviewData
  Get the Compiler Adminview Data

  since: 3.2.0
  return: AdminviewData
end note

note right of Adminview::getAdminviewPermission
  Get the Compiler Adminview Permission

  since: 3.2.0
  return: Permission
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

