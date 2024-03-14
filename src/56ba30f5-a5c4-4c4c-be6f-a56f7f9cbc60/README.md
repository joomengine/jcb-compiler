```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class ArchitectureController (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**
```uml
@startuml
class ArchitectureController  #Gold {
  # $targetVersion
  + register(Container $container) : void
  + getAllowAdd(Container $container) : AllowAddInterface
  + getJ5ControllerAllowAdd(Container $container) : J5ControllerAllowAdd
  + getJ4ControllerAllowAdd(Container $container) : J4ControllerAllowAdd
  + getJ3ControllerAllowAdd(Container $container) : J3ControllerAllowAdd
  + getAllowEdit(Container $container) : AllowEditInterface
  + getJ5ControllerAllowEdit(Container $container) : J5ControllerAllowEdit
  + getJ4ControllerAllowEdit(Container $container) : J4ControllerAllowEdit
  + getJ3ControllerAllowEdit(Container $container) : J3ControllerAllowEdit
}

note right of ArchitectureController::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of ArchitectureController::getAllowAdd
  Get The AllowAddInterface Class.

  since: 3.2.0
  return: AllowAddInterface
end note

note right of ArchitectureController::getJ5ControllerAllowAdd
  Get The AllowAdd Class.

  since: 3.2.0
  return: J5ControllerAllowAdd
end note

note left of ArchitectureController::getJ4ControllerAllowAdd
  Get The AllowAdd Class.

  since: 3.2.0
  return: J4ControllerAllowAdd
end note

note right of ArchitectureController::getJ3ControllerAllowAdd
  Get The AllowAdd Class.

  since: 3.2.0
  return: J3ControllerAllowAdd
end note

note left of ArchitectureController::getAllowEdit
  Get The AllowEditInterface Class.

  since: 3.2.0
  return: AllowEditInterface
end note

note right of ArchitectureController::getJ5ControllerAllowEdit
  Get The AllowEdit Class.

  since: 3.2.0
  return: J5ControllerAllowEdit
end note

note left of ArchitectureController::getJ4ControllerAllowEdit
  Get The AllowEdit Class.

  since: 3.2.0
  return: J4ControllerAllowEdit
end note

note right of ArchitectureController::getJ3ControllerAllowEdit
  Get The AllowEdit Class.

  since: 3.2.0
  return: J3ControllerAllowEdit
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

