```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Modifieddate (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Model**

```uml
@startuml
class Modifieddate  #Gold {
  # array $last
  + get(array $item) : string
  # getDate(array|object $item) : int
  # getModified(array|object $item) : int
  # getKey(array|object $item) : string
  # getKeyFromArray(array $item) : string
  # getKeyFromObject(object $item) : string
}

note right of Modifieddate::get
  Get the last modified date of an item

  since: 3.2.0
  return: string
end note

note right of Modifieddate::getDate
  Get the last modified date of an item

  since: 3.2.0
  return: int
end note

note right of Modifieddate::getModified
  Get the last modified date of an item's sub items

  since: 3.2.0
  return: int
end note

note right of Modifieddate::getKey
  Get the key for an item

  since: 3.2.0
  return: string
end note

note right of Modifieddate::getKeyFromArray
  Get the key for an item (array)

  since: 3.2.0
  return: string
end note

note right of Modifieddate::getKeyFromObject
  Get the key for an item (object)

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
Super---9127e428_5dee_46cb_b3a9_ab5b91ea6df3---Power
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

