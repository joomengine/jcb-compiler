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
  + getJ5ModelCanDelete(Container $container) : J5ModelCanDelete
  + getJ4ModelCanDelete(Container $container) : J4ModelCanDelete
  + getJ3ModelCanDelete(Container $container) : J3ModelCanDelete
  + getModelCanEditState(Container $container) : CanEditStateInterface
  + getJ5ModelCanEditState(Container $container) : J5ModelCanEditState
  + getJ4ModelCanEditState(Container $container) : J4ModelCanEditState
  + getJ3ModelCanEditState(Container $container) : J3ModelCanEditState
}

note right of ArchitectureModel::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of ArchitectureModel::getModelCanDelete
  Get The Model CanDelete Class.

  since: 3.2.0
  return: CanDeleteInterface
end note

note right of ArchitectureModel::getJ5ModelCanDelete
  Get The Model CanDelete Class.

  since: 3.2.0
  return: J5ModelCanDelete
end note

note left of ArchitectureModel::getJ4ModelCanDelete
  Get The Model CanDelete Class.

  since: 3.2.0
  return: J4ModelCanDelete
end note

note right of ArchitectureModel::getJ3ModelCanDelete
  Get The Model CanDelete Class.

  since: 3.2.0
  return: J3ModelCanDelete
end note

note left of ArchitectureModel::getModelCanEditState
  Get The Model Can Edit State Class.

  since: 3.2.0
  return: CanEditStateInterface
end note

note right of ArchitectureModel::getJ5ModelCanEditState
  Get The Model Can Edit State Class.

  since: 3.2.0
  return: J5ModelCanEditState
end note

note left of ArchitectureModel::getJ4ModelCanEditState
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

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---bbd36fbf_d905_47e8_8e67_9ea6ec734712---Power
```
> remember to replace the `---` with `___` to activate this Power in your code

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

