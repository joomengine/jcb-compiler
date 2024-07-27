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
  + getAllowEditViews(Container $container) : AllowEditViewsInterface
  + getJ5ControllerAllowEditViews(Container $container) : J5ControllerAllowEditViews
  + getJ4ControllerAllowEditViews(Container $container) : J4ControllerAllowEditViews
  + getJ3ControllerAllowEditViews(Container $container) : J3ControllerAllowEditViews
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

note left of ArchitectureController::getAllowEditViews
  Get The AllowEditViewsInterface Class.

  since: 5.0.2
  return: AllowEditViewsInterface
end note

note right of ArchitectureController::getJ5ControllerAllowEditViews
  Get The AllowEditViews Class.

  since: 5.0.2
  return: J5ControllerAllowEditViews
end note

note left of ArchitectureController::getJ4ControllerAllowEditViews
  Get The AllowEditViews Class.

  since: 5.0.2
  return: J4ControllerAllowEditViews
end note

note right of ArchitectureController::getJ3ControllerAllowEditViews
  Get The AllowEditViews Class.

  since: 5.0.2
  return: J3ControllerAllowEditViews
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---56ba30f5_a5c4_4c4c_be6f_a56f7f9cbc60---Power
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

