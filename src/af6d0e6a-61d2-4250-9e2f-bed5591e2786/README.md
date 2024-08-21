```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class MainXML (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Architecture\JoomlaFour\Plugin**

```uml
@startuml
class MainXML << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Language $language
  # Set $set
  # Purge $purge
  # Translation $translation
  # Multilingual $multilingual
  # Event $event
  # FieldsetExtension $fieldsetextension
  # ContentOne $contentone
  # Languages $languages
  # BuilderMultilingual $buildermultilingual
  # Counter $counter
  # File $file
  + __construct(Config $config, Language $language, ...)
  + get(object $plugin) : string
  # buildConfigFields(object $plugin) : array
  # shouldAddComponentPath(object $plugin) : bool
  # generateScriptAndSqlXml(object $plugin) : string
  # generateLanguageXml(object $plugin, array $languageFiles) : string
  # generateFileXml(object $plugin, array $languageFiles) : string
  # generateConfigXml(object $plugin, array $configFields, ...) : string
  # generateUpdateServerXml(object $plugin) : string
  # generateLanguageFiles(object $plugin) : array
}

note right of MainXML::__construct
  Constructor.

  since: 5.0.2
  
  arguments:
    Config $config
    Language $language
    Set $set
    Purge $purge
    Translation $translation
    Multilingual $multilingual
    Event $event
    FieldsetExtension $fieldsetextension
    ContentOne $contentone
    Languages $languages
    BuilderMultilingual $buildermultilingual
    Counter $counter
    File $file
end note

note left of MainXML::get
  Generates the main XML for the plugin.

  since: 5.0.2
  return: string
end note

note right of MainXML::buildConfigFields
  Build configuration fields XML.

  since: 5.0.2
  return: array
end note

note left of MainXML::shouldAddComponentPath
  Determine if the component path should be added.

  since: 5.0.2
  return: bool
end note

note right of MainXML::generateScriptAndSqlXml
  Generate XML for script and SQL files.

  since: 5.0.2
  return: string
end note

note left of MainXML::generateLanguageXml
  Generate XML for language files.

  since: 5.0.2
  return: string
end note

note right of MainXML::generateFileXml
  Generate the XML for the files.

  since: 5.0.2
  return: string
end note

note left of MainXML::generateConfigXml
  Generate XML for configuration fields.

  since: 5.0.2
  return: string
  
  arguments:
    object $plugin
    array $configFields
    bool $addComponentPath
end note

note right of MainXML::generateUpdateServerXml
  Generate XML for update servers.

  since: 5.0.2
  return: string
end note

note left of MainXML::generateLanguageFiles
  Generate language files.

  since: 5.0.2
  return: array
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---af6d0e6a_61d2_4250_9e2f_bed5591e2786---Power
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

