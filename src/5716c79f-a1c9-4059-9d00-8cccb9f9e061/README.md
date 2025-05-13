```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class JoomlaPower (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**

```uml
@startuml
class JoomlaPower  #Gold {
  + register(Container $container) : void
  + getPowers(Container $container) : Powers
  + getRemoteConfig(Container $container) : Config
  + getRemoteGet(Container $container) : Get
  + getGrep(Container $container) : Grep
  + getExtractor(Container $container) : Extractor
  + getInjector(Container $container) : Injector
}

note right of JoomlaPower::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of JoomlaPower::getPowers
  Get the Powers

  since: 3.2.0
  return: Powers
end note

note right of JoomlaPower::getRemoteConfig
  Get The Remote Config Class.

  since: 5.1.1
  return: Config
end note

note right of JoomlaPower::getRemoteGet
  Get the Remote Get

  since: 3.2.0
  return: Get
end note

note right of JoomlaPower::getGrep
  Get the Grep

  since: 3.2.0
  return: Grep
end note

note right of JoomlaPower::getExtractor
  Get the Compiler Power Extractor

  since: 3.2.0
  return: Extractor
end note

note right of JoomlaPower::getInjector
  Get the Compiler Power Injector

  since: 3.2.0
  return: Injector
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---5716c79f_a1c9_4059_9d00_8cccb9f9e061---Power
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

