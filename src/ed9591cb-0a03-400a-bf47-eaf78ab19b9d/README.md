```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Extension (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**

```uml
@startuml
class Extension  #Gold {
  # $targetVersion
  + register(Container $container) : void
  + getJ3ExtensionInstallScript(Container $container) : J3InstallScript
  + getJ4ExtensionInstallScript(Container $container) : J4InstallScript
  + getJ5ExtensionInstallScript(Container $container) : J5InstallScript
  + getExtensionInstallScript(Container $container) : GetScriptInterface
}

note right of Extension::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of Extension::getJ3ExtensionInstallScript
  Get the Joomla 3 Extension Install Script

  since: 3.2.0
  return: J3InstallScript
end note

note right of Extension::getJ4ExtensionInstallScript
  Get the Joomla 4 Extension Install Script

  since: 3.2.0
  return: J4InstallScript
end note

note right of Extension::getJ5ExtensionInstallScript
  Get the Joomla 5 Extension Install Script

  since: 3.2.0
  return: J5InstallScript
end note

note right of Extension::getExtensionInstallScript
  Get the Joomla Extension Install Script

  since: 3.2.0
  return: GetScriptInterface
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---ed9591cb_0a03_400a_bf47_eaf78ab19b9d---Power
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

