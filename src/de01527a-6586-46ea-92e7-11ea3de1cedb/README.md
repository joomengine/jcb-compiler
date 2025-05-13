```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Power (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**

```uml
@startuml
class Power  #Gold {
  + register(Container $container) : void
  + getPowers(Container $container) : Powers
  + getPowerTable(Container $container) : Table
  + getRemoteConfig(Container $container) : Config
  + getRemoteGet(Container $container) : Get
  + getGrep(Container $container) : Grep
  + getAutoloader(Container $container) : Autoloader
  + getInfusion(Container $container) : Infusion
  + getStructure(Container $container) : Structure
  + getParser(Container $container) : Parser
  + getPlantuml(Container $container) : Plantuml
  + getItemReadme(Container $container) : ItemReadme
  + getMainReadme(Container $container) : MainReadme
  + getExtractor(Container $container) : Extractor
  + getInjector(Container $container) : Injector
}

note right of Power::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of Power::getPowers
  Get The Power Class.

  since: 3.2.0
  return: Powers
end note

note right of Power::getPowerTable
  Get The Power Table Class.

  since: 5.1.1
  return: Table
end note

note left of Power::getRemoteConfig
  Get The Remote Config Class.

  since: 5.1.1
  return: Config
end note

note right of Power::getRemoteGet
  Get The Remote Get Class.

  since: 3.2.0
  return: Get
end note

note left of Power::getGrep
  Get The Grep Class.

  since: 3.2.0
  return: Grep
end note

note right of Power::getAutoloader
  Get The Autoloader Class.

  since: 3.2.0
  return: Autoloader
end note

note left of Power::getInfusion
  Get The Infusion Class.

  since: 3.2.0
  return: Infusion
end note

note right of Power::getStructure
  Get The Structure Class.

  since: 3.2.0
  return: Structure
end note

note left of Power::getParser
  Get The Parser Class.

  since: 3.2.0
  return: Parser
end note

note right of Power::getPlantuml
  Get The Plantuml Class.

  since: 3.2.0
  return: Plantuml
end note

note left of Power::getItemReadme
  Get The Readme Class.

  since: 3.2.0
  return: ItemReadme
end note

note right of Power::getMainReadme
  Get The Readme Class.

  since: 3.2.0
  return: MainReadme
end note

note left of Power::getExtractor
  Get The Extractor Class.

  since: 3.2.0
  return: Extractor
end note

note right of Power::getInjector
  Get The Injector Class.

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
Super---de01527a_6586_46ea_92e7_11ea3de1cedb---Power
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

