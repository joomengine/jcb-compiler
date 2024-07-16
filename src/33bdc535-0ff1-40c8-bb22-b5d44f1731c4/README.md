```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface CustomcodeInterface (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Interfaces**

```uml
@startuml
interface CustomcodeInterface  #Lavender {
  + update(string $string, int $debug) : string
  + set(string $string, int $debug, ...) : string
  + get(?array $ids = null, bool $setLang = true, ...) : bool
}

note right of CustomcodeInterface::update
  Update **ALL** dynamic values in a strings here
We can now at any time debug the
dynamic build values if it gets broken

  since: 3.2.0
  return: string
end note

note right of CustomcodeInterface::set
  Set the custom code data & can load it in to string

  since: 3.2.0
  return: string
  
  arguments:
    string $string
    int $debug
    ?int $not = null
end note

note right of CustomcodeInterface::get
  Load the custom code from the system

  since: 3.2.0
  return: bool
  
  arguments:
    ?array $ids = null
    bool $setLang = true
    int $debug
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---33bdc535_0ff1_40c8_bb22_b5d44f1731c4---Power
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

