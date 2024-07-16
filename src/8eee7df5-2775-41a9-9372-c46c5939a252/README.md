```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Language (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler**

```uml
@startuml
class Language  #Gold {
  # array $content
  # Config $config
  + __construct(?Config $config = null)
  + key(string $string) : string
  + exist(string $target, ?string $language = null) : bool
  + get(string $target, string $language) : string
  + getTarget(string $target) : array
  + setTarget(string $target, ?array $content) : void
  + set(string $target, string $language, ...) : void
  + fix(string $string) : string
}

note right of Language::__construct
  Constructor.

  since: 3.2.0
end note

note left of Language::key
  Get the language string key

  since: 3.2.0
  return: string
end note

note right of Language::exist
  check if the language string exist

  since: 3.2.0
  return: bool
end note

note left of Language::get
  get the language string

  since: 3.2.0
  return: string
end note

note right of Language::getTarget
  get target array

  since: 3.2.0
  return: array
end note

note left of Language::setTarget
  set target array

  since: 3.2.0
  return: void
end note

note right of Language::set
  set the language content values to language content array

  since: 3.2.0
  return: void
  
  arguments:
    string $target
    string $language
    string $string
    bool $addPrefix = false
end note

note left of Language::fix
  Removes all types of line breaks from a given string.
This method is designed to strip out all kinds of new line characters from the input string
to ensure a single-line output. It takes into consideration different operating systems'
line endings, including the combination of Carriage Return and Line Feed.

  since: 3.2.0
  return: string
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---8eee7df5_2775_41a9_9372_c46c5939a252---Power
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

