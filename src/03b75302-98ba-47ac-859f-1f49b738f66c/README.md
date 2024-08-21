```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Infusion (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Joomlaplugin\JoomlaThree**

```uml
@startuml
class Infusion << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Placeholder $placeholder
  # Header $header
  # Event $event
  # Data $data
  # InstallScript $installscript
  # Extension $extension
  # MainXML $mainxml
  # ContentMulti $contentmulti
  # FieldsetExtension $fieldsetextension
  + __construct(Config $config, Placeholder $placeholder, ...)
  + set() : void
  # triggerBeforeInfusionEvent(object $plugin) : void
  # setPlaceholders(object $plugin) : void
  # buildPluginContent(object $plugin) : void
  # setExtensionClassHeader(object $plugin) : void
  # setExtensionClass(object $plugin) : void
  # setInstallClass(object $plugin) : void
  # setFieldsets(object $plugin) : void
  # setMainXml(object $plugin) : void
  # triggerAfterInfusionEvent(object $plugin) : void
}

note right of Infusion::__construct
  Constructor.

  since: 5.0.2
  
  arguments:
    Config $config
    Placeholder $placeholder
    Header $header
    Event $event
    Data $data
    InstallScript $installscript
    Extension $extension
    MainXML $mainxml
    ContentMulti $contentmulti
    FieldsetExtension $fieldsetextension
end note

note left of Infusion::set
  Infuse the plugin data into the content.
This method processes each plugin in the data set, triggering events
before and after infusion, setting placeholders, and adding content
such as headers, classes, and XML configurations.

  since: 5.0.2
  return: void
end note

note right of Infusion::triggerBeforeInfusionEvent
  Trigger the event before infusing the plugin data.

  since: 5.0.2
  return: void
end note

note left of Infusion::setPlaceholders
  Set placeholders based on plugin data.

  since: 5.0.2
  return: void
end note

note right of Infusion::buildPluginContent
  Build and set the content related to the plugin.

  since: 5.0.2
  return: void
end note

note left of Infusion::setExtensionClassHeader
  Set the extension class header content.

  since: 5.0.2
  return: void
end note

note right of Infusion::setExtensionClass
  Set the extension class content.

  since: 5.0.2
  return: void
end note

note left of Infusion::setInstallClass
  Set the install script content, if needed.

  since: 5.0.2
  return: void
end note

note right of Infusion::setFieldsets
  Set fieldset content based on form files.

  since: 5.0.2
  return: void
end note

note left of Infusion::setMainXml
  Set the main XML content for the plugin.

  since: 5.0.2
  return: void
end note

note right of Infusion::triggerAfterInfusionEvent
  Trigger the event after infusing the plugin data.

  since: 5.0.2
  return: void
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---03b75302_98ba_47ac_859f_1f49b738f66c---Power
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

