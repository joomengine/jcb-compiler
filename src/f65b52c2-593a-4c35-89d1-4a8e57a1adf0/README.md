```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class CoreRules (Details)
> namespace: **VDM\Joomla\Componentbuilder\Service**

```uml
@startuml
class CoreRules  #Gold {
  # $currentVersion
  + register(Container $container) : void
  + getJ3CoreRule(Container $container) : J3CoreRule
  + getJ4CoreRule(Container $container) : J4CoreRule
  + getJ5CoreRule(Container $container) : J5CoreRule
  + getCoreRule(Container $container) : CoreRule
}

note right of CoreRules::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of CoreRules::getJ3CoreRule
  Get The CoreRule Class.

  since: 3.2.0
  return: J3CoreRule
end note

note right of CoreRules::getJ4CoreRule
  Get The CoreRule Class.

  since: 3.2.0
  return: J4CoreRule
end note

note right of CoreRules::getJ5CoreRule
  Get The CoreRule Class.

  since: 3.2.0
  return: J5CoreRule
end note

note right of CoreRules::getCoreRule
  Get The CoreRuleInterface Class.

  since: 3.2.0
  return: CoreRule
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---f65b52c2_593a_4c35_89d1_4a8e57a1adf0---Power
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

