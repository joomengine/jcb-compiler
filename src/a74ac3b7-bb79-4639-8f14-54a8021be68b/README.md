```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Customcode (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**

```uml
@startuml
class Customcode  #Gold {
  + register(Container $container) : void
  + getCustomcode(Container $container) : CustomcodeInterface
  + getExternal(Container $container) : External
  + getGui(Container $container) : Gui
  + getHash(Container $container) : Hash
  + getLockBase(Container $container) : LockBase
  + getDispenser(Container $container) : Dispenser
  + getPaths(Container $container) : Paths
  + getExtractor(Container $container) : Extractor
}

note right of Customcode::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of Customcode::getCustomcode
  Get the Compiler Customcode

  since: 3.2.0
  return: CustomcodeInterface
end note

note right of Customcode::getExternal
  Get the Compiler Customcode External

  since: 3.2.0
  return: External
end note

note left of Customcode::getGui
  Get the Compiler Customcode Gui

  since: 3.2.0
  return: Gui
end note

note right of Customcode::getHash
  Get the Customcode Hash

  since: 3.2.0
  return: Hash
end note

note left of Customcode::getLockBase
  Get the Customcode LockBase64

  since: 3.2.0
  return: LockBase
end note

note right of Customcode::getDispenser
  Get the Customcode Dispenser

  since: 3.2.0
  return: Dispenser
end note

note left of Customcode::getPaths
  Get the Customcode Extractor Paths

  since: 3.2.0
  return: Paths
end note

note right of Customcode::getExtractor
  Get the Customcode Extractor

  since: 3.2.0
  return: Extractor
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---a74ac3b7_bb79_4639_8f14_54a8021be68b---Power
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

