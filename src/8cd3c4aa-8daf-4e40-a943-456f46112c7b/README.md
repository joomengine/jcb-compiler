```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class ArchitectureComHelperClass (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**

```uml
@startuml
class ArchitectureComHelperClass  #Gold {
  # $targetVersion
  + register(Container $container) : void
  + getCreateUser(Container $container) : CreateUserInterface
  + getJ5CreateUser(Container $container) : J5CreateUser
  + getJ4CreateUser(Container $container) : J4CreateUser
  + getJ3CreateUser(Container $container) : J3CreateUser
}

note right of ArchitectureComHelperClass::register
  Registers the service provider with a DI container.

  since: 5.0.2
  return: void
end note

note right of ArchitectureComHelperClass::getCreateUser
  Get The CreateUserInterface Class.

  since: 5.0.2
  return: CreateUserInterface
end note

note right of ArchitectureComHelperClass::getJ5CreateUser
  Get The CreateUser Class.

  since: 5.0.2
  return: J5CreateUser
end note

note right of ArchitectureComHelperClass::getJ4CreateUser
  Get The CreateUser Class.

  since: 5.0.2
  return: J4CreateUser
end note

note right of ArchitectureComHelperClass::getJ3CreateUser
  Get The CreateUser Class.

  since: 5.0.2
  return: J3CreateUser
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---8cd3c4aa_8daf_4e40_a943_456f46112c7b---Power
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

