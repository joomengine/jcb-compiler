```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class ArchitectureModel (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**
```uml
@startuml
class ArchitectureModel  #Gold {
  # $targetVersion
  + register(Container $container) : void
  + getModelCanDelete(Container $container) : CanDeleteInterface
  + getJ4ModelCanDelete(Container $container) : J4ModelCanDelete
  + getJ3ModelCanDelete(Container $container) : J3ModelCanDelete
  + getModelCanEditState(Container $container) : CanEditStateInterface
  + getJ4ModelCanEditState(Container $container) : J4ModelCanEditState
  + getJ3ModelCanEditState(Container $container) : J3ModelCanEditState
}

note right of ArchitectureModel::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of ArchitectureModel::getModelCanDelete
  Get The Model CanDelete Class.

  since: 3.2.0
  return: CanDeleteInterface
end note

note right of ArchitectureModel::getJ4ModelCanDelete
  Get The Model CanDelete Class.

  since: 3.2.0
  return: J4ModelCanDelete
end note

note right of ArchitectureModel::getJ3ModelCanDelete
  Get The Model CanDelete Class.

  since: 3.2.0
  return: J3ModelCanDelete
end note

note right of ArchitectureModel::getModelCanEditState
  Get The Model Can Edit State Class.

  since: 3.2.0
  return: CanEditStateInterface
end note

note right of ArchitectureModel::getJ4ModelCanEditState
  Get The Model Can Edit State Class.

  since: 3.2.0
  return: J4ModelCanEditState
end note

note right of ArchitectureModel::getJ3ModelCanEditState
  Get The Model Can Edit State Class.

  since: 3.2.0
  return: J3ModelCanEditState
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

