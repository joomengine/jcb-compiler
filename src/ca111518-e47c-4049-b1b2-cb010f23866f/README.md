```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Reverse (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Placeholder**

```uml
@startuml
class Reverse  #Gold {
  # Config $config
  # Placeholder $placeholder
  # Language $language
  # Extractor $extractor
  # Power $power
  # JoomlaPower $joomla
  + __construct(Config $config, Placeholder $placeholder, ...)
  + engine(string $string, array $placeholders, ...) : string
  # setReverse(string $updateString, string $string, ...) : string
  # reverseSuperPowers(string $updateString, string $string, ...) : string
  # reverseJoomlaPowers(string $updateString, string $string, ...) : string
  # getReversePower(array $powers, array $useStatements, ...) : ?array
  # reverseLanguage(string $updateString, string $string, ...) : string
  # reverseCustomCode(string $updateString, string $string) : string
}

note right of Reverse::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Placeholder $placeholder
    Language $language
    Extractor $extractor
    Power $power
    JoomlaPower $joomla
end note

note left of Reverse::engine
  Reverse Engineer the dynamic placeholders (TODO hmmmm this is not ideal)

  since: 3.2.0
  return: string
  
  arguments:
    string $string
    array $placeholders
    string $target
    ?int $id = null
    string $field = 'code'
    string $table = 'custom_code'
    ?array $useStatements = null
end note

note right of Reverse::setReverse
  Reverse engineer the dynamic language, and super powers

  since: 3.2.0
  return: string
  
  arguments:
    string $updateString
    string $string
    string $target
    ?array $useStatements
end note

note left of Reverse::reverseSuperPowers
  Set the super powers keys for the reveres process

  since: 3.2.0
  return: string
  
  arguments:
    string $updateString
    string $string
    ?array $useStatements
end note

note right of Reverse::reverseJoomlaPowers
  Set the joomla powers keys for the reveres process

  since: 3.2.0
  return: string
  
  arguments:
    string $updateString
    string $string
    ?array $useStatements
end note

note left of Reverse::getReversePower
  Set the super powers keys for the reveres process

  since: 3.2.0
  return: ?array
  
  arguments:
    array $powers
    array $useStatements
    string $target
end note

note right of Reverse::reverseLanguage
  Set the language strings for the reveres process

  since: 3.2.0
  return: string
  
  arguments:
    string $updateString
    string $string
    string $target
end note

note left of Reverse::reverseCustomCode
  Set the custom code placeholder for the reveres process

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
Super---ca111518_e47c_4049_b1b2_cb010f23866f---Power
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

