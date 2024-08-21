```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Set (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Language**

```uml
@startuml
class Set << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Language $language
  # Multilingual $multilingual
  # Languages $languages
  # Insert $insert
  # Update $update
  + __construct(Config $config, Language $language, ...)
  + execute(array $strings, int $target_id, ...) : void
  # processString(string $string, array $strings, ...) : void
  # updateOrInsertString(string $string, $multiLangString, ...) : void
  # getTargets(array $multiLangString, string $target, ...) : array
}

note right of Set::__construct
  Constructor.

  since: 5.0.2
  
  arguments:
    Config $config
    Language $language
    Multilingual $multilingual
    Languages $languages
    Insert $insert
    Update $update
end note

note right of Set::execute
  Set the current language values to the database.
This method inserts or updates language strings in the database based on the current state.

  since: 5.0.2
  return: void
  
  arguments:
    array $strings
    int $target_id
    string $target = 'components'
end note

note right of Set::processString
  Process an individual language string for database update or insert.

  since: 5.0.2
  return: void
  
  arguments:
    string $string
    array $strings
    string $area
    string $placeholder
    $multiLangString
    string $target
    int $target_id
    string $today
    $counterInsert
    $counterUpdate
end note

note right of Set::updateOrInsertString
  Update or insert a language string in the database.

  since: 5.0.2
  return: void
  
  arguments:
    string $string
    $multiLangString
    string $target
    int $target_id
    string $today
    $counterInsert
    $counterUpdate
end note

note right of Set::getTargets
  Get targets for a given string.

  since: 5.0.2
  return: array
  
  arguments:
    array $multiLangString
    string $target
    int $target_id
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---058cfcd7_1f84_4cc6_8bcc_7672f316881d---Power
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

